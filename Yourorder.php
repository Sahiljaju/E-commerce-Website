<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Your Orders</title>
	<link rel="stylesheet" type="text/css" href="Yourorder.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-info"></i> Get information
</button>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">
                <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                <div class="px-4 py-5">
                    <h5 class="text-uppercase">Sahil Jaju</h5>
                    <h4 class="mt-5 theme-color mb-5">Thanks for your order</h4> <span class="theme-color">Payment Summary</span>
                    <div class="mb-3">
                        <hr class="new1">
                    </div>
                    <div class="d-flex justify-content-between"> <span class="font-weight-bold">Life of Pii</span> <span class="text-muted">Rs 300.00</span> </div>
                    <div class="d-flex justify-content-between"> <small>Shipping</small> <small>Rs.100.00</small> </div>
                    <div class="d-flex justify-content-between"> <small>Tax</small> <small>Rs 0.00</small> </div>
                    <div class="d-flex justify-content-between mt-3"> <span class="font-weight-bold">Total</span> <span class="font-weight-bold theme-color">Rs.400.00</span> </div>
                    <div class="text-center mt-5"> <button class="btn btn-primary">Track your order</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>