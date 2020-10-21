function validateBookCategory(){
  var bookvategoryName = document.getElementById("bookCategoryName").value;

  if (bookvategoryName == null || bookvategoryName == "") {

    alert("Please enter Category Name");
    return false;

  }
}

function validateAdminBooksUpdate(){

    var inventoryId = document.getElementById("bookInvetoryId").value;
    var bookTitle = document.getElementById("bookName").value;
    var bookIsbn = document.getElementById("bookIsbn").value;
    var bookPrice = document.getElementById("bookPrice").value;
    var authorId = document.getElementById("bookAuthor").value;
    var publicationId = document.getElementById("bookPublisherId").value;
    var bookQuantity = document.getElementById("bookQuntity").value;
    var bookImage = document.getElementById("bookImg").value;


    if (inventoryId == null || inventoryId == "") {

      alert("Please enter Inventory Id");
      return false;

  }

    if (bookTitle == null || bookTitle == "") {

    alert("Please enter BookTitle");
    return false;

  }

  if (bookIsbn == null || bookIsbn == "") {

    alert("Please enter ISBN Number");
    return false;

  }

  if (bookPrice == null || bookPrice == "") {

    alert("Please enter Price");
    return false;

  }

  if (authorId == null || authorId == "") {

    alert("Please enter Author Id");
    return false;

  }

  if (publicationId == null || publicationId == "") {

    alert("Please enter Publisher Id");
    return false;

  }

  if (bookQuantity == null || bookQuantity == "") {

    alert("Please enter Publisher Id");
    return false;

  }

  if (bookImage == null || bookImage == "") {

    alert("Please Uplaod Book Image");
    return false;

  }

  else {

    alert('Operation Submited');

}
}

function addAuthorValidation(){

  var authorNameCheck = document.getElementById("bookAuthorName").value;


  if (authorNameCheck == null || authorNameCheck == "") {

    alert("Please Enter Author Name");
    return false;

  }

  else {

    alert('Operation Submited');

}
}

function addPublisherValidate(){

  var publisherNameCheck = document.getElementById("bookPubName").value;

  if (publisherNameCheck == null || publisherNameCheck == "") {

    alert("Please Enter Publisher Name");
    return false;

  }

  else {

    alert('Operation Submited');

}
}

function addCategory() {
  window.open("../src/addCategory.html");
}
