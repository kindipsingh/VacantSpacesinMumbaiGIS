<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Awesome Map and Research</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url('./mumbai.jpeg') no-repeat center center fixed; /* Ensure the path to your image is correct */
    background-size: cover; /* Ensures the background covers the entire viewport */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #f0f0f0; /* Lighter text color for better readability */
}

header {
    background-color: rgba(51, 51, 51, 0.8); /* Semi-transparent black for better visibility */
    color: #fff;
    padding: 20px;
    text-align: center;
    width: 100%;
}

h1 {
    margin: 0;
}

.section {
    margin: 20px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.6); /* Semi-transparent white for content sections */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 960px;
    color: #333; /* Dark text for reading within light background sections */
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 10px;
    background-color: #0056b3; /* Darker blue to better fit the night theme */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
}

iframe {
    width: 100%;
    height: 600px; /* Adjust height as needed */
    border: none;
}

    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Project!</h1>
        <p>Explore the interactive map and detailed research paper on Vacant spaces in Mumbai.</p>
    </header>
    <div class="section">
    <h2>View the Map</h2>
    <a href="https://sdmhaske-b22.nextgis.com/resource/27/display" class="btn">View the map on nextgis</a>
</div>
    <div class="section">
        <h2>Read the Research Paper</h2>
        <!-- Embed the PDF file -->
        <iframe src="Project_Report.pdf"></iframe>
        <!-- Optionally, provide a direct download link as well -->
        <a href="Project_Report.pdf" class="btn" download>Download Research Paper</a>
    </div>
</body>
</html>
