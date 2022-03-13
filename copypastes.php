<?php
$pageTitle = 'CopyPastes';
require('includes/header.php');
?>

<html>

<style>
    .CopyPasteContent {
        clear: both;
        float: left;
        margin: 5px;
        margin-top: 3px;
        padding: 3px;
        width: 100%;
        resize: none;
        outline: none;
        width: 100%;
        cursor: pointer;
    }
    
    .CopyPasteContent:hover {
        box-shadow: inset 1px 2px 4px 1px rgba(0, 0, 0, 0.20);
    }
    
    .CopyPasteContent:active,
    .CopyPasteContent:focus {
        box-shadow: inset 3px 5px 8px 2.5px rgba(0, 0, 0, 0.2), inset -3px -5px 8px 2.5px rgba(0, 0, 0, 0.2);
    }
</style>

<head></head>

<body>



</body>
<script>
    class CopyPaste {
        constructor(id, name, content, cTime, desc, authorId, tags) {
            this.id = id;
            this.name = name;
            this.content = content;
            this.cTime = cTime;
            this.desc = desc;
            this.authorId = authorId;
            this.tags = tags;
            
        }

        toJson() {
            return JSON.stringify(this);
        }
    }

    function drawCopyPasteRow(cpObject) {







        let tempTd;



        let baseDiv = document.body.appendChild(document.createElement('div'));
        baseDiv.style = "background-color: #30303d; margin: 8px; float: left; padding: 12px; width: 38%; box-shadow: 5px 8px 10px 2px rgba(0,0,45,0.3);";

        let rowDiv = document.createElement('div');
        rowDiv.style = "float: left; width: 100%;";
        baseDiv.appendChild(rowDiv);



        let elName = document.createElement('b');
        elName.style = "float: left; padding: 3px; margin-right: 5px;";
        elName.innerHTML = cpObject.name.toString();
        rowDiv.appendChild(elName);

        let elCTime = document.createElement('i');
        elCTime.style = "float: left; padding: 3px; margin-left: 8px; font-size: 90%;";
        elCTime.innerHTML = cpObject.cTime.toString();
        rowDiv.appendChild(elCTime);

        let elAuthor = document.createElement('span');
        elAuthor.style = "float: right; padding: 3px; margin-right: 5px; margin-bottom: 5px;";
        elAuthor.innerHTML = " - " + cpObject.authorId.toString();;
        rowDiv.appendChild(elAuthor);


        let elTags = document.createElement('span');
        elTags.style = "float: left; clear: both; padding: 1px; padding-left: 5px; padding-bottom: 2px; font-size: 95%;";
        elTags.innerHTML = "Tags:  " + cpObject.tags.toString();;
        rowDiv.appendChild(elTags);







        let contentDiv = document.createElement('div');
        contentDiv.style = "clear: both; padding: 8px;  width: 95%; float: left; box-shadow: inset -1px -1.5px 8px 6px rgba(50, 50, 150, 0.05);";
        baseDiv.appendChild(contentDiv);

        let elDesc = document.createElement('p');
        elDesc.style = "clear: both; font-size: 80%;  margin: 2px; margin-left: 10px; margin-right: 5px; padding: 3px; box-shadow: inset -1px -1px 1px 1px rgba(0, 0, 0, 0.1); width: 90%;";
        elDesc.innerHTML = cpObject.desc.toString();
        contentDiv.appendChild(elDesc);


        let txtAreaContent = document.createElement('textarea');
        txtAreaContent.readOnly = true;
        txtAreaContent.wrap = "off";
        txtAreaContent.rows = 6;
        txtAreaContent.className = "CopyPasteContent";
        txtAreaContent.addEventListener("click", contentClick);

        txtAreaContent.innerHTML = cpObject.content.toString();

        contentDiv.appendChild(txtAreaContent);



    }




    function contentClick(event) {
        let c = event.target.innerHTML;
        navigator.clipboard.writeText(c);

    }
    //
    /*
        var obj = {
            prop: "asdf",
            bbb: "qwe123123"
        }

        console.log(obj.prop)
        console.log(obj.bbb)

        let objJson = JSON.stringify(obj);

        console.log(objJson)
    */



    //test object
    o0 = new CopyPaste(
        1,
        'nam',
        'this is the content to copy bla;h blah ipsum shit ass fuck blah blah',
        '10/10/10 10:30pm',
        'description of copypaste',
        55, ["tag", "blah"]);


    //test object
    o1 = new CopyPaste(
        4,
        'alex',
        'this is the content shit shit shit shit shit ',
        '3/11/22 9:31am',
        'description etc.',
        17, ["things", "wut"]);


    //test object
    o2 = new CopyPaste(
        1,
        'nam',
        'poop asdflkajsekloriasuhsewofihjsdlofisd asdfgawer5349r 90384 u09384u90823u 0  2 039 id ifdcio sds sdfsdf',
        '12/12/24 12:15pm',
        'this is a description',
        92, ["stuff", "wut"]);


    //
    //init
    //
    drawCopyPasteRow(o0);
    drawCopyPasteRow(o1);
    drawCopyPasteRow(o2);



    //
</script>

</html>