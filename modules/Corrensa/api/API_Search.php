<?php

/* ********************************************************************************
 * The content of this file is subject to the Corrensa ("License");
 * You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is VTExperts.com
 * Portions created by VTExperts.com. are Copyright(C) VTExperts.com.
 * All Rights Reserved.
 * ****************************************************************************** */

require_once 'include/Webservices/Utils.php';
require_once 'include/Webservices/Query.php';
require_once 'modules/Corrensa/Config.php';
require_once 'modules/Corrensa/libs/utils.php';

class API_Search extends BaseModule
{

    protected $query = "";
    protected $fields = ['potentialname', 'sales_stage'];

    private function _searchInArray($record)
    {
        foreach ($this->fields as $fieldName) {
            $value = strtolower($record[$fieldName]);
            $query = strtolower($this->query);
            if(strpos($value, $query) !== false) {
                return true;
            }
        }
        return false;
    }

    public function findRelatedList($request)
    {
        $mainModule = $request->get('mm');
        $mainRecord = $request->get('mr');
        $relModule   = $request->get('rm');
        $fields = $request->get('flds');
        $query = $request->get('q');
        $limit = $request->get('limit');
        $page = $request->get('page');
        $currentUser = Users_Record_Model::getCurrentUserModel();

        if(empty($limit)) $limit = 10;
        if(empty($page)) $page = 1;
        if(!empty($fields)) $fields = explode(',', $fields);

        $idColumn = array(
            'Accounts'  => 'account_id',
            'Contacts'  => 'contact_id',
            'HelpDesk'  => 'ticket_id',
            'Invoice'   => 'invoice_id',
            'Leads'     => 'lead_id',
            'Potentials' => 'potential_id',
            'Quotes'    => 'quote_id',
        );

        $queryLimit = 100;
        $countRs = vtws_query("SELECT COUNT(*) FROM $relModule 
                               WHERE {$idColumn[$mainModule]} = '$mainRecord';", $currentUser);
        $pageSize = ceil($countRs[0]['count'] / $queryLimit);
        
        $allRecords = [];
        
        for($i = 0; $i < $pageSize; $i++) {
            $startAt = $i * $queryLimit;
            $rs = vtws_query("SELECT * FROM $relModule 
                              WHERE {$idColumn[$mainModule]} = '$mainRecord' 
                              LIMIT $startAt, $queryLimit;", $currentUser);
            $allRecords = array_merge($allRecords, $rs);
        }

        if(!empty($query) && !empty($fields)) {
            $this->query = $query;
            $this->fields = $fields;
            $allRecords = array_filter($allRecords, [$this, "_searchInArray"]);
        }

        $allRecords = array_values($allRecords);

        // Paging
        if(count($allRecords) > $limit) {
            $start = $limit * ($page - 1);
            $allRecords = array_splice($allRecords, $start, $limit);
        }

        // Display
        $result = array(
            'totalCount' => count($allRecords),
            'page'  => $page,
            'limit' => $limit,
            'data' => $allRecords
        );

        $this->displayJson($result);
    }

}

