<?php
require 'control/function.php';
require 'control/cek.php';
require("template_dashboard/header.php");
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pemesanan</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>mill no</th>
                                <th>po no</th>
                                <th>buyer</th>
                                <th>style</th>
                                <th>collar</th>
                                <th>type</th>
                                <th>qty</th>
                                <th>tgl pesan</th>
                                <th>buyreq</th>
                                <th>input by</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</main>
<?php require_once("template_dashboard/footer.php"); ?>