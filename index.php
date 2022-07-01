<?php
$phpArray = [
    [
        'name' => 'Top Level',
        'parent' => 'null',
        'information' => 'mrrr',
        'children' =>
                [
                    0 =>
                    ['name' => 'Level 2: A',
                        'parent' => 'Top Level',
                        'children' =>
                            [
                                0 =>['name' => 'Son of A',
                                'parent' => 'Level 2: A',],

                                1 =>
                                    [ 'name' => 'Daughter of A',
                                        'parent' => 'Level 2: A',],],],
                     1 =>
                    [ 'name' => 'Level 2: B',
                        'parent' => 'Top Level',]]

    ]
];
echo json_encode($phpArray);die;
if(isset($_POST, $_POST['action'])) {
    if ($_POST['action'] === 'changeEmployee') {
        // Todo: do employee change functionality
        // Todo: insert log
    }
    if ($_POST['action'] === 'deleteEmployee') {
        // Todo: do employee change functionality
        // Todo: insert log
    }
}
if(isset($_GET, $_GET['action'])) {
    if ($_GET['action'] === 'getSource') {
        // Todo: get $phpArray from DATABASE
        exit(json_encode($phpArray));
    }
}
