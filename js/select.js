


function itemchange(){

var seobuk =["두정동","불당동","성정동"]
var dongnam =["봉명동","원성동","오룡동"]


var selectItem = $(".gu").val();

var changeItem;


if(selectItem == "seobuk"){
    changeItem =seobuk;
}else {
    changeItem =dongnam;
}


$(".dong").empty();


for(var count =0; count < changeItem.size(); count++){
    var option = $("<option>"+ changeItem[count]+ "</option>");
    $(".dong").append(option);
}

}