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




<style>
#divNewCopyPaste input.newCopyPasteInputText,
#divNewCopyPaste textarea.newCopyPasteInputText {
    width: 85%;
}
#divNewCopyPaste form {
    margin: 10px;
    width: 100%;
    padding: 10px;
    box-shadow: 5px 8px 10px 2px rgba(0,0,45,0.3), -1px -0.5px 6px 1px rgba(0,0,20,0.2);
    border: .5px solid black;
    background-color: #34393f;
}
#divNewCopyPaste {
    /* margin: auto; */
    width: 38%;
    
}
#divNewCopyPaste #ckbAnonymous {
    margin: 15px;
    margin-left: 23px;
}
#divNewCopyPaste #cpSubmit {
    margin: 10px;
    padding: 10px;
}
#divNewCopyPaste #cpReset {
    margin: 10px;
    padding: 10px;
}
#divNewCopyPaste form h4 {
    margin: 3px;
    box-shadow: 1px 2px 2px 0.5px rgba(0,0,0,0.17);
    width: 38%;
}
</style>

<div id="divNewCopyPaste">
<form action="copypastes.php" method="post">
    <h4>New CopyPaste</h4>
    <label>Name:</label><br>
    <input name="cpName" class="newCopyPasteInputText"/><br>
    <label>Description:</label><br>
    <input name="cpDesc" class="newCopyPasteInputText"/><br>
    <label>Tags:</label><br>
    <input name="cpTags" class="newCopyPasteInputText"/><br>
    <label>Content:</label><br>
    <textarea name="cpContent" class="newCopyPasteInputText" rows=6></textarea><br>

    <input name="cpIsAnonymous" id="ckbAnonymous" type="checkbox"/><label for="ckbAnonymous">Anonymous</label><br>
    <button id="cpReset" type="reset">Clear</button><button name="submit" id="cpSubmit" type="submit">Create</button><br>
    
</form>
 




<!-- POST NEW COPYPASTE -->

<?php

//form submission:


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
        $validated = true;
		

        $name;
        $desc;
        $tags;
        $content;
        $isAnonymous; 

        //validation
		if(empty($_POST['cpName']))
		{
			$validated = false;
		 	echo "<p>You didn't enter a username!";
		}
        else
            $name = $_POST['cpName'];

        if(empty($_POST['cpDesc']))
			$desc = "";
        else
            $desc = $_POST['cpDesc'];


        if(empty($_POST['cpTags']))
			$tags = "";
		else
            $tags = $_POST['cpTags'];


        if(empty($_POST['cpContent']))
		{
			$validated = false;
		 	echo "<p>You didn't enter any content!";
		}
        else
        {
            $content = $_POST['cpContent'];
            $content = str_replace("\r\n", '\n', $content);
        }

        //validated
        if($validated)
        {

            
            
            require('includes/sqlConnect.php');
            $q = "insert into copypastes
            ([name],[content],[desc],authorIsAnonymous,tags)
            values('" . $name . "', '". $content ."', '" . $desc . "', 0, '" . $tags . "' )";
            require('includes/sqlQuery.php');





        }

}


?>  



<script>





function getCopyPastes() {
    
    let copyPastes = [];

    

    <?php
    try
    {
        require('includes/sqlConnect.php');
        $q = 'select * from copypastes;';
        require('includes/sqlQuery.php');

        echo 'let rowCount = ' . $rowCount . ";\n\n";
        
        

        
        echo "\n\n//From database via PHP:\n\n";


        //each row
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) )
        {
            
            $id = $row['id'];
            $name = $row['name'];
            $content = $row['content'];

            $cTime = $row['cTime'];
            $desc = $row['desc'];
            
            $authorIsGuest = $row['authorIsGuest'];
            $authorIsAnonymous = $row['authorIsAnonymous'];
            $authorId = $row['authorId'];
            $tags = $row['tags'];


            


            echo "copyPastes.push(new CopyPaste(" .
                $id . ", '" . $name . "', '" . $content .
                "', " . '\'$cTime\'' . ", '" . $desc . "', " . $authorIsGuest .
                ", " . $authorIsAnonymous . ", " . $authorId . ", '" . $tags . "')); \n\n";

            

           


            /*
            ( 'id' => 1,
             'name' => 'test', 
             'content' => 'this is content for the first test blah blahh blah',
             'cTime' => DateTime::__set_state(array( 'date' => '2022-03-14 07:51:17.000000',
                'timezone_type' => 3,
                'timezone' => 'Europe/Berlin', )),
             'desc' => 'this is test 1',
             'authorIsGuest' => 1,
             'authorIsAnonymous' => NULL,
             'authorId' => NULL,
             'tags' => 'test', )


             */


            
        }


    }catch (Exception $e)
    {
            echo "<br><br>SQL Error - " . $e . '<br><br>'; 
            
            //die(print_r($e));
    }
    ?>

    



    return copyPastes;

    <?php
    include('includes/sqlCleanResources.php');
    ?>

}//end of grtCopyPastes

    



    class CopyPaste {

        id;
        name;
        content;
        cTime;
        desc;
        authorIsGuest;
        authorIsAnonymous;
        authorId;
        tags;

        constructor(id, name, content, cTime, desc, authorIsGuest, authorIsAnonymous, authorId, tags) {
            this.id = id;
            this.name = name;
            this.content = content;
            this.cTime = cTime;
            this.desc = desc;
            this.authorIsGuest = authorIsGuest;
            this.authorIsAnonymous = authorIsAnonymous;
            this.authorId = authorId;
            this.tags = tags;
            
        }

        toJson() {
            return JSON.stringify(this);
        }
    }

    function drawCopyPasteRow(cpObject) 
    {




        let tempTd;



        let baseDiv = document.body.appendChild(document.createElement('div'));
        baseDiv.style = "background-color: #30303d; margin: 8px; float: left; padding: 8px; width: 38%; box-shadow: 5px 8px 10px 2px rgba(0,0,45,0.3); ";

        let rowDiv = document.createElement('div');
        rowDiv.style = "float: left; width: 100%; box-shadow: inset 1.5px 1.5px 2px 1px rgba(10,0,10,0.15);"; 
        baseDiv.appendChild(rowDiv);



        let elName = document.createElement('b');
        elName.style = "float: left; padding: 1px; margin-right: 5px; text-decoration: underline; font-size: 120%; font-weight: bold;";
        elName.innerHTML = cpObject.name;
        rowDiv.appendChild(elName);

        //ctime
        let elCTime = document.createElement('i');
        elCTime.style = "float: left; padding: 1px; margin-left: 30px; font-size: 90%; font-size: smaller; font-weight: lighter; color: #a09e9b;";
        elCTime.innerHTML =  cpObject.cTime;
        rowDiv.appendChild(elCTime);
/*
        let elAuthor = document.createElement('span');
        elAuthor.style = "float: right; padding: 3px; margin-right: 5px; margin-bottom: 5px;";
        elAuthor.innerHTML = " - " + cpObject.authorId;
        rowDiv.appendChild(elAuthor);
*/

        let elTags = document.createElement('span');
        elTags.style = "float: left; clear: both; padding: 0.5px; padding-left: 5px; padding-bottom: 0px; font-size: 90%; line-height: 90%; margin-left: 15px;";
        if(cpObject.tags == null  ||  cpObject.tags == "")
            elTags.innerHTML = "<b>Tags:</b>  " + '<i>(none)</i>';
        else
            elTags.innerHTML = "Tags:  " + cpObject.tags;
        rowDiv.appendChild(elTags);


        




        //bottom div
        let contentDiv = document.createElement('div');
        contentDiv.style = "clear: both; padding: 9px; padding-bottom: 1px; padding-top: 1px; width: 95%; float: left; box-shadow: inset -1px -1.5px 8px 6px rgba(50, 50, 150, 0.05);";
        baseDiv.appendChild(contentDiv);

        //desc
        let elDesc = document.createElement('p');
        elDesc.style = "clear: both; font-size: 80%;  margin: 2px; margin-left: 10px; margin-right: 5px; margin-top: 0px; padding: 1px; width: 90%;";
        elDesc.innerHTML = cpObject.desc;
        contentDiv.appendChild(elDesc);

        //content
        let txtAreaContent = document.createElement('textarea');
        txtAreaContent.readOnly = true;
        txtAreaContent.style = "display: table; margin-top: -5px; margin-bottom: 2px;";
        txtAreaContent.wrap = "off";
        txtAreaContent.rows = 6;
        txtAreaContent.className = "CopyPasteContent";
        txtAreaContent.addEventListener("click", contentClick);
        txtAreaContent.innerHTML = cpObject.content;
        contentDiv.appendChild(txtAreaContent);


       

        let deleteIcon = contentDiv.appendChild(document.createElement('img'));
        deleteIcon.style = "height: 30px; width: 30px; margin: 1px; padding: 0px; cursor: pointer; margin-left: 25%; position: relative; top: 7px;";
        deleteIcon.src = "trash.png";
        deleteIcon.className = "cpDeleteIcon";
        



    }






    async function sleep(delay) {
        
        var start = new Date().getTime();
        while (new Date().getTime() < start + delay);
}




    async function contentClick(event) {

        let c = event.target.innerHTML;
        navigator.clipboard.writeText(c);

        let popups = document.getElementsByClassName('copiedToClipboardPopup');

        for (let i = 0; i < popups.length; i++) {
            const el = popups[i];
            
            el.parentElement.removeChild(el);
        }
       
        
        //copied to clipboard popup - added to event target (content textarea) object
        let elCopiedPopup = document.createElement('span');
        elCopiedPopup.style = "color: red; display: table; margin: 0 auto; position: absolute; margin-left: 12.5%; margin-top: 118px; background-color: rgba(50, 0, 0, 0.35); pointer-events : none;";
        elCopiedPopup.innerHTML = 'Copied to clipboard!';
        elCopiedPopup.className = "copiedToClipboardPopup";
        event.target.before(elCopiedPopup);  
        
         
        


}
        
        

    









        //
        //
        //init

    let a = getCopyPastes();

    console.log(a.length);
    console.log('contents:\n' + JSON.stringify(a));

    a.forEach(cp => {

        drawCopyPasteRow(cp);
        
    });

    
</script>


</body>




</html>