
<div class="container buycard" style="display: none">
    <div class="row">
        <div class="col-md-2 mb-1">
          <h4>Payment</h4>
       </div>
    </div>
    <div class="row">

        <div class="col-md-6 mb-3">
            
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
                Credit card number is required
            </div>
        </div><br>

        <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
                Expiration date required
            </div>
        </div><br>
        <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
                Security code required
            </div>
        </div>
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">BUY</button>
</div>
