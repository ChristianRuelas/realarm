<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/compra.css">
    <link rel="icon" type="image/png" href="img/Logo.png">
    <script src="js/index.js"></script>
    <meta charset="UTF-8">
    <title>Compra</title>
</head>
<body>
    <a class="atras" onclick="regresar()">Regresar</a>
   
    <div class="paypal" id="smart-button-container">
        <img src="img/1-775-0-1-2-800x800.jpg" alt="">
        <div style="text-align: center;">
          <div style="margin-bottom: 1.25rem;">
            <p class="titulo">Dispositivo de seguridad con sensor magnetico Realarm para casa o negocio</p>
            <select class="despliegue" id="item-options"><option value="Dispositivo con 2 sensores 1 boton de panico" price="1500">Dispositivo 2 sensores  - 1500 MXN</option>
            <option value="Dispositivo con 3 sensores 2 botones de panico" price="2000">Dispositivo 3 sensores  - 2000 MXN</option></select>
            <p class="titulo">Cantidad</p>
            <select class="despliegue" style="visibility: hidden" id="quantitySelect"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>
          </div>
        <div id="paypal-button-container"></div>
        </div>
      </div>
      <script src="https://www.paypal.com/sdk/js?client-id=AV5iLQbPgz9AI3K41Scc19bQl9NR0_w4a8pF8hDNU6wBIsGO7FQ_tGmt-ubgJkHyvOqF18490zPr62xI&currency=MXN" data-sdk-integration-source="button-factory"></script>
      <script>
        function initPayPalButton() {
          var shipping = 99;
          var itemOptions = document.querySelector("#smart-button-container #item-options");
      var quantity = parseInt(3);
      var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");
      if (!isNaN(quantity)) {
        quantitySelect.style.visibility = "visible";
      }
      var orderDescription = 'Dispositivo de seguridad para casa habitacion con boton de panico';
      if(orderDescription === '') {
        orderDescription = 'Item';
      }
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'blue',
          layout: 'vertical',
          label: 'buynow',
          
        },
        createOrder: function(data, actions) {
          var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex].value;
          var selectedItemPrice = parseFloat(itemOptions.options[itemOptions.selectedIndex].getAttribute("price"));
          var tax = (16 === 0) ? 0 : (selectedItemPrice * (parseFloat(16)/100));
          if(quantitySelect.options.length > 0) {
            quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
          } else {
            quantity = 1;
          }
  
          tax *= quantity;
          tax = Math.round(tax * 100) / 100;
          var priceTotal = quantity * selectedItemPrice + parseFloat(shipping) + tax;
          priceTotal = Math.round(priceTotal * 100) / 100;
          var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;
  
          return actions.order.create({
            purchase_units: [{
              description: orderDescription,
              amount: {
                currency_code: 'MXN',
                value: priceTotal,
                breakdown: {
                  item_total: {
                    currency_code: 'MXN',
                    value: itemTotalValue,
                  },
                  shipping: {
                    currency_code: 'MXN',
                    value: shipping,
                  },
                  tax_total: {
                    currency_code: 'MXN',
                    value: tax,
                  }
                }
              },
              items: [{
                name: selectedItemDescription,
                unit_amount: {
                  currency_code: 'MXN',
                  value: selectedItemPrice,
                },
                quantity: quantity
              }]
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaccion completada por   ' + details.payer.name.given_name + '!');
            regresar2();
          });
        },
        onError: function(err) {
          console.log(err);
        },
      }).render('#paypal-button-container');
    }
    initPayPalButton();
      </script>
    
</body>
</html>