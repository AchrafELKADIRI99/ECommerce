function submitForm ($id){

    const input = document.querySelector("#prodId");
    const form = document.querySelector("#form");
    input.value = $id;
    form.submit();


}
function getCatProducts($id) {
    const input = document.querySelector("#cat_id");
    const form = document.querySelector("#catPro");
    input.value = $id;
    form.submit();
  }
  

  
  function deleteForm($id) {
    const input = document.querySelector("#delete_product_id");
    const form = document.querySelector("#delete_form");
    input.value = $id;
    form.submit();
  }