function submitForm ($id){

    const input = document.querySelector("#prodId");
    const form = document.querySelector("#form");
    input.value = $id;
    form.submit();


}