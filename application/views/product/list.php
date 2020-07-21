<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price Normal</th>
            <th scope="col">Price Sale</th>
            <th scope="col">View</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if(count($products)>0) {
        foreach ($products as $product) {
            $id = $product['id'];
            ?>
            <tr>
                <td><?=$product['name']?></td>
                <td><?=$product['description']?></td>
                <td><?=$product['price_normal']?></td>
                <td><?=$product['price_sale']?></td>
                <td>
                    <a href="#" onclick="viewProduct(<?=$id?>)"><i class="fas fa-eye"></i></a>
                </td>
                <td>
                    <a href="#" onclick="editProduct(<?=$id?>)"><i class="fas fa-pen"></i></a>
                </td>
                <td>
                    <a href="#" onclick="deleteProduct(<?=$id?>)"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php
        }
    }else{?>
            <tr>
                <td colspan="10" style="text-align: center;">No Data</td>
            </tr>
    <?php 
    }
    ?>
    </tbody>
</table>