<!DOCTYPE HTML>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>Files</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="resources/scripts.js"></script>
    <link rel="stylesheet" href="resources/styles.css">
</head>
<body style="margin-top: 100px;">
    <div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>Data Scrambler</h1>
            <p>
                <button id="keyGen" class="buttonReset" value="keyG">Genereate Key</button> |

                <input type="radio" id="encode" name="task" value="encode">
                <label class="orientation" for="encode">Encode</label> |
                <input type="radio" id="decode" name="task" value="decode">
                <label class="orientation" for="decode">Decode</label>
            </p>
            <label for="newKey">New Key</label>
            <h6 id="newKey" row="10"></h6>

            <label for="userInputKey">Input Key</label>
            <input id="userInputKey" type="text" name="userInputKey">

            <label for="iData">Input Data</label>
            <textarea id="iData" name="iData" cols="30" rows="10"></textarea>

            <label for="resultField">Result</label>
            <textarea id="resultField" name="result" cols="30" rows="10"></textarea>

            <button type="submit" id="resultButton" value="resultButton">View Result</button>
        </div>
    </div></div>
    <script src="resources/scripts.js"></script>
</body>
</html>