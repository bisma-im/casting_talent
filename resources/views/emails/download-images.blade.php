<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download All Images</title>
</head>
<body>
    <h1>Downloading Images...</h1>

    <script>
        const filePaths = @json($filePaths); // Convert PHP array to JavaScript array

        // Function to download files sequentially
        function downloadFiles(files) {
            files.forEach(file => {
                const a = document.createElement('a');
                a.href = file;
                a.download = ''; // You can specify a filename here if you want
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            });
        }

        downloadFiles(filePaths);
    </script>
</body>
</html>
