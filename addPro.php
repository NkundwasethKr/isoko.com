<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>
        Add Product
    </title>
    <link rel="stylesheet" href="addP.css">
</head>
<script>
var pName = document.getElementById("pname").value;
function dealWith()
{
    var pName =document.forms["form"]["pname"].value;
    if(pName == "")
    {
    alert("Insert Product Name");
    return false;
    }
}

</script>
<body>
    <center>
    <div class="up">
        <h1>Add Product</h1>
        <fieldset>
            <form name="form" action="addProduct.php" method="POST" enctype="multipart/form-data" onsubmit="return dealWith()">
                <table>
                    <tr>
                        <th>
                            <label for="pname" id="pname">Name</label>
                        </th>
                        <td>
                            <input type="text" name="pname">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="price">Price</label>
                        </th>
                        <td>
                            <input type="text" name="price" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="details">Details</label>
                        </th>
                        <td>
                            <textarea type="text" name="details"required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="picture">Picture</label>
                        </th>
                        <td>
                            <input type="file" name="picture" required>
                        </td>
                    </tr>
                </table>
                <button type="submit">ADD</button>
            </form>
        </fieldset>
    </div>
    </center>
    
</body>

</html>