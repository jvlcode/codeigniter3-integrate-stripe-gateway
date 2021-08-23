<!DOCTYPE html>
<html>
  <head>
    <title>Buy cool new product</title>
  </head>
  <body>
    <section style="margin-left: 500px;"> 
      <div  class="product">
        <img width="80" height="80" src="https://img.joomcdn.net/6bedef3cd7a88abcf3990433c4301cb5620a8c23_original.jpeg"
          alt="The cover of Stubborn Attachments"
        />
        <div class="description">
          <h3>Black T-Shirt</h3>
          <h5>Rs.20.00</h5>
        </div>
      </div>
      <form method="POST" action="<?=base_url('payment/create')?>">
		<input type="hidden" name="amount" value="20">
		<input type="hidden" name="qty" value="1">
        <button type="submit">Checkout</button>
      </form>
    </section>
  </body>
</html>
