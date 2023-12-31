<?php

if (!defined('ACCESS')) {
    http_response_code(404);
    die();
}

$body = <<<HTML
    <div class="container-fluid add-prod-btn-box">
        <div class="row">
            <div class="col artist-prods-title">
                <p>My Products</p>
            </div>
            <div class="col text-right mt-2">
                <button type="button" class="btn btn-accent" data-toggle="modal" data-target="#add-prod-modal">Add Product</button>
            </div>
        </div>
    </div>

    <table id="artist-products" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>PRODUCT NAME</th>
                <th>DESCRIPTION</th>
                <th>PRICE (RM)</th>
                <th>STOCK</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <div class="modal fade" id="add-prod-modal" tabindex="-1" role="dialog" aria-labelledby="add-prod-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header add-prod-modal-header">
                    <h5 class="modal-title" id="add-prod-modal-label">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add-prod-form" method="POST" enctype="multipart/form-data">
                    <div class="modal-body add-prod-input">
                        <div class="form-group">
                            <label for="prod-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="prod-name" name="prod-name">
                            <span id="prodNameError" class="errorText"></span>
                        </div>
                        <div class="form-group">
                            <label for="prod-price" class="col-form-label">Price:</label>
                            <input type="number" class="form-control" id="prod-price" name="prod-price" step="0.01">
                            <span id="prodPriceError" class="errorText"></span>
                        </div>
                        <div class="form-group">
                            <label for="prod-qty" class="col-form-label">Quantity:</label>
                            <input type="number" class="form-control" id="prod-qty" name="prod-qty" step="1">
                            <span id="prodQtyError" class="errorText"></span>
                        </div>
                        <div class="form-group">
                            <label for="prod-desc" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="prod-desc" name="prod-desc"></textarea>
                            <span id="prodDescError" class="errorText"></span>
                        </div>
                        <div class="form-group prod-img-grp">
                            <input type="file" id="prod-img" name="prod-img" accept="image/*">
                            <span id="prodImgError" class="errorText"></span>
                            <button type="submit" class="btn btn-primary add-prod-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
HTML;
