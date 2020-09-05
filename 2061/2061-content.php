<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-2058">
            <div class="container-fluid">
              <h1 class="display-4 my-4 text-info">List of users</h1>
              <table class="table table-striped" id="users" style="width: 100%;">
                <thead >
                  <tr id="list-header">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>  
                <tbody>      
                </tbody>
              </table>
              <button type="button" class="btn btn-primary" id="btnReloadData">Reload data</button>
            </div>            
        </div>         

