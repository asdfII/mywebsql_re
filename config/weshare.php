<?php
$SERVER_LIST = array(
                    'Localhost MySQL' => array(
                                              'host'     => 'localhost',
                                              'driver'   => extension_loaded('mysqli') ? 'mysqli' : 'mysql5'
                                         ),
                    '192.168.163.100' => array(
                                              'host'     => '192.168.163.100',
                                              'driver'   => extension_loaded('mysqli') ? 'mysqli' : 'mysql5'
                                         ),
                    'Remotehost01'    => array(
                                              'host'     => 'Remote IP01',
                                              'driver'   => extension_loaded('mysqli') ? 'mysqli' : 'mysql5'
                                         ),
                    'Remotehost02'    => array(
                                              'host'     => 'Remote IP02',
                                              'driver'   => extension_loaded('mysqli') ? 'mysqli' : 'mysql5'
                                         ),
               );
?>