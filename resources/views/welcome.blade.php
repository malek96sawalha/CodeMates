<form action="paypal" method="POST">
@csrf

<input type="hidden" name="price" value="20">
<input type="text" name="name" >
<button type="submit">submit paypal</button>
</form>

<form action="stripe" method="POST">
@csrf

<input type="hidden" name="price" value="20">
<input type="text" name="name1" >
<button type="submit">submit stripe</button>
</form>



					</form>
                    <form action="stripe" class="bg-white p-5 rounded donation-form" method="post">
@csrf
                        <h3 for="" style="background: white; margin:0;    font-weight: bold;
    margin-bottom: 0px;
    text-transform: uppercase;
    font-size: 18px;">Or donate by Visa</h3>
    
                         <input type="text" placeholder="0.00" class="form-control px-4" name="price">
                         <input type="submit" value="visa" class="btn visa w-100" style="" >
                    </form>