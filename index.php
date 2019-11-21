<HTML>
<HEAD>
<TITLE>Clone HTML using jQuery</TITLE>
<style>
.float-clear{clear:both;}
.float-left{float:left;}
#demo-outer {background-color: #F0F0F0;}
.product-item input[type="text"] {padding: 5px;border:#ccc 1px solid;margin: 0px 10px;}
.product-item input[type="checkbox"] {margin: 10px;}
#product-header div{padding: 20px 5px 15px;margin: 0px 10px;}
.col-heading{width:150px;font-size:16px;font-weight:bold;}
.btn-action{padding:10px;}
.btn-action input[type="button"]{padding:5px; border:#CCCCCC 1px solid;}
</style>
<SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<SCRIPT>
function addMore() {
	$(".product-item:last").clone().insertAfter(".product-item:last");	
}
function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</SCRIPT>
</HEAD>
<BODY>
<FORM name="frmProduct" method="post" action="">
<DIV id="demo-outer">
<DIV id="product-header">
<DIV class="float-left">&nbsp;</DIV>
<DIV class="float-left col-heading">Item Name</DIV>
<DIV class="float-left col-heading">Item Price</DIV>
</DIV>
<DIV id="product">
	<DIV class="product-item float-clear" style="clear:both;">
	<DIV class="float-left"><input type="checkbox" name="item_index[]" /></DIV>
	<DIV class="float-left"><input type="text" name="item_name[]" /></DIV>
	<DIV class="float-left"><input type="text" name="item_price[]" /></DIV>
	</DIV>
</DIV>
<DIV class="btn-action float-clear">
<input type="button" name="add_item" value="Add More" onClick="addMore();" />
<input type="button" name="del_item" value="Delete" onClick="deleteRow();" />
</DIV>
</DIV>
</form>
</BODY>
</HTML>