<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Products Table</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <!-- Data will be loaded here -->
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/api/product')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('table-body');
                    data.products.forEach(product => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${product.id}</td>
                            <td>${product.name}</td>
                            <td>${product.price}</td>
                            <td>${product.stock}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                })
                .catch(error => console.error('Error fetching products:', error));
        });
    </script>
</body>
</html>
