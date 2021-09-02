$(function(){
    $.ajax({
      url: "https://localhost/sit-dashboard/dist/tablez.php",
      method: "GET",
      success: function(datatable){
        console.log(datatable);
        var id = [];
        var productname = [];
        var productprice = [];
        var productcat = [];
        var productdetails = [];

        for(var i in datatable) {
          id.push(data[i].producr_id);
          productname.push(data[i].product_name);
          productprice.push(data[i].product_price);
          productcat.push(data[i].product_cat);
          productdetails.push(data[i].product_details);
        }

        

    },
    error:function(datatable){
      console.log(datatable)
    
    
    }
    })
});

function table(){
    let productContainer = document.querySelector(".products-container");

        array.values(datatable).map(item => {
            productContainer.innerHTML += `
            
            <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>product_id</th>
                    <th>product_name</th>
                    <th>product_price</th>
                    <th>product_cat</th>
                    <th>product_details</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>product_id</th>
                    <th>product_name</th>
                    <th>product_price</th>
                    <th>product_cat</th>
                    <th>product_details</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>${id}</td>
                    <td>${product_name}</td>
                    <td>${product_price}</td>
                    <td>${product_cat}</td>
                    <td>${product_details}</td>
                </tr>
            </tbody>
        </table>
        `;
        });
		
}

table();