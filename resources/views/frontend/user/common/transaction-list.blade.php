<!-- Title
=============================== -->
<div class="transaction-title py-2 px-4">
    <div class="row">
        <div class="col-2 col-sm-1 text-center"><span class="">Date</span></div>
        <div class="col-2 text-center"><span class="d-none d-sm-inline">Transaction </span>ID</div>
        <div class="col">Description</div>
        <div class="col-3 col-sm-2 text-right">Amount</div>
        <div class="col-auto col-sm-2 d-none d-sm-block text-center">Status</div>
    </div>
</div>
<!-- Title End -->

<!-- Transaction List
                        =============================== -->
<div class="transaction-list">
    <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
        <div class="row align-items-center flex-row">
            <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">FEB</span> </div>
            <div class="col-2 text-center">523112</div>
            <div class="col"> <span class="d-block text-4">Utsav Adhikari</span><span class="text-muted">Payment Received</span></div>
            <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
            <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-warning" data-toggle="tooltip" data-original-title="Pending"><i class="fas fa-ellipsis-h"></i></span> </div>
        </div>
    </div>

    <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
        <div class="row align-items-center flex-row">
            <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">FEB</span> </div>
            <div class="col-2 text-center">523112</div>
            <div class="col"> <span class="d-block text-4">Utsav Adhikari</span><span class="text-muted">Payment Received</span></div>
            <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
            <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
        </div>
    </div>

    <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
        <div class="row align-items-center flex-row">
            <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">FEB</span> </div>
            <div class="col-2 text-center">523112</div>
            <div class="col"> <span class="d-block text-4">Utsav Adhikari</span><span class="text-muted">Payment Received</span></div>
            <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
            <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
        </div>
    </div>
</div>
<!-- Transaction List End -->

<!-- Transaction Item Details Modal
=========================================== -->
<div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-left py-4">
                        <div class="my-auto text-center">
                            <div class="text-17 text-white my-3"><i class="fas fa-user"></i></div>
                            <h3 class="text-4 text-white font-weight-400 my-3">Utsav Adhikari</h3>
                            <div class="text-8 font-weight-500 text-white my-4">$557.20</div>
                            <p class="text-white">15 March 2019</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h5 class="text-5 font-weight-400 m-3">Transaction Details
                            <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </h5>
                        <hr>
                        <div class="px-3">
                            <ul class="list-unstyled">
                                <li class="mb-2">Payment Amount <span class="float-right text-3">$562.00</span></li>
                                <li class="mb-2">Fee <span class="float-right text-3">-$4.80</span></li>
                            </ul>
                            <hr class="mb-2">
                            <p class="d-flex align-items-center font-weight-500 mb-4">Total Amount <span class="text-3 ml-auto">$557.20</span></p>
                            <div class="more-detail">
                                <div class="row">
                                    <div class="col-7">
                                        <ul class="list-unstyled">
                                            <li class="font-weight-500">Transaction ID:</li>
                                            <li class="text-muted">123456</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <ul class="list-unstyled">
                                            <li class="font-weight-500">Status:</li>
                                            <li class="text-muted">Completed</li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="font-weight-500">Recipient:</li>
                                    <li class="text-muted">Utsav Adhikari</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="font-weight-500">Country:</li>
                                    <li class="text-muted">Nepal</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="font-weight-500">Bank:</li>
                                    <li class="text-muted">Machhepuchre Bank</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="font-weight-500">Description:</li>
                                    <li class="text-muted">Envato March 2019 Member Payment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Transaction Item Details Modal End -->