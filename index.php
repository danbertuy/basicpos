<?php
require './v/header.php';
?>

<div class="container-fluid justify-content-md-center vh-100"> 
    <div class="row justify-content-md-center align-items_center vh-100">
        <div class="col-md-6 align-self-center">
            <form class="container-fluid" action="./c/c.php?action=add_item" method="POST">
            <div class="col-12 mb-3 h3 text-center">ADD ITEM</div>    
            <div class="form-floating mb-3">  
                <input type="text" class="form-control formin" id="item_code" placeholder="item_code" name="item_code">
                <label for="item_code">code</label>
            </div>
            <div class="form-floating mb-3">      
                <input type="text" class="form-control formin" id="item_name" placeholder="item_code" name="item_name">
                <label for="item_name">name</label>
            </div>
            <div class="form-floating mb-3">      
                <input type="text" class="form-control formin" id="item_brand" placeholder="item_brand" name="item_brand">
                <label for="item_brand">brand</label>
            </div>
            <div class="form-floating mb-3">      
                <input type="number" class="form-control formin" id="item_price" placeholder="item_price" name="item_price">
                <label for="item_price">price</label>
            </div> 
            <div class="form-floating mb-3">      
                <input type="number" class="form-control formin" id="item_quantity" placeholder="item_quantity" name="item_quantity">
                <label for="item_quantity">quantity</label>
            </div>     
            <div class="mb">      
                <input type="submit" class="btn-lg btn-primary w-100" value="Save">
            </div>     
            </form>    
        </div>
    </div>
    
    <div class="row w-100 justify-content-md-center align-items_center">
        <div class="col-md-8 align-self-center">
            <div class="col-12 mb-3 h3 text-center">ITEMS</div>    
        <table class="table " id="items">
            <thead>
                <tr>
                    <th>code</th>
                    <th>name</th>
                    <th>brand</th>
                    <th>price</th>
                    <th>quantity</th>
                </tr>
            </thead>
                <tr>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                </tr>   
                <tr>
                    <td>B</td>
                    <td>B</td>
                    <td>B</td>
                    <td>B</td>
                    <td>B</td>
                </tr>  
             <tfoot>
                <tr>
                    <th>code</th>
                    <th>name</th>
                    <th>brand</th>
                    <th>price</th>
                    <th>quantity</th>
                </tr>
            </tfoot>
        </table>
        </div>
    </div>
</div> 

<?php
require './v/footer.php';