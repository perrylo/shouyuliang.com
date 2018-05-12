<!DOCTYPE html>

<?php
$globalNavId = "books-dvds";
$sectionNavId = (string)$_GET['id'];
?>


<?php
function aws_signed_request($region, $params, $public_key, $private_key){
    /*
    Parameters:
        $region - the Amazon(r) region (ca,com,co.uk,de,fr,jp)
        $params - an array of parameters, eg. array("Operation"=>"ItemLookup",
                        "ItemId"=>"B000X9FLKM", "ResponseGroup"=>"Small")
        $public_key - your "Access Key ID"
        $private_key - your "Secret Access Key"
    */

    // some paramters
    $method = "GET";
    $host = "ecs.amazonaws.".$region;
    $uri = "/onca/xml";

    // additional parameters
    $params["Service"] = "AWSECommerceService";
    $params["AWSAccessKeyId"] = $public_key;
    // GMT timestamp
    $params["Timestamp"] = gmdate("Y-m-d\TH:i:s\Z");
    // API version
    $params["Version"] = "2009-03-31";

    // sort the parameters
    ksort($params);

    // create the canonicalized query
    $canonicalized_query = array();
    foreach ($params as $param=>$value)
    {
        $param = str_replace("%7E", "~", rawurlencode($param));
        $value = str_replace("%7E", "~", rawurlencode($value));
        $canonicalized_query[] = $param."=".$value;
    }
    $canonicalized_query = implode("&", $canonicalized_query);

    // create the string to sign
    $string_to_sign = $method."\n".$host."\n".$uri."\n".$canonicalized_query;

    // calculate HMAC with SHA256 and base64-encoding
    $signature = base64_encode(hash_hmac("sha256", $string_to_sign, $private_key, True));

    // encode the signature for the request
    $signature = str_replace("%7E", "~", rawurlencode($signature));

    // create request
    $request = "http://".$host.$uri."?".$canonicalized_query."&Signature=".$signature;

    // echo $request;
    
    // do request
    $response = @file_get_contents($request);

    if ($response === False)
    {
        return False;
    }
    else
    {
        // parse XML
        $pxml = simplexml_load_string($response);
        if ($pxml === False)
        {
            return False; // no xml
        }
        else
        {
            return $pxml;
        }
    }
}


//Function to display an item attribute
//$attributeTitle	is the title to display
//$attributeValue	is the value to display
function displayProductAttribute($attributeTitle,$attributeValue,$attributeValueExtra)
{
	if (strcasecmp($attributeValue,'') == 0) return '';
	if (strcasecmp($attributeTitle,'Region:')==0 && strcasecmp($attributeValue,'0')==0) $attributeValue = 'All regions';
    return '<div class="contentTitle">'.$attributeTitle.'</div><div class="contentBody">'.$attributeValue.' '.$attributeValueExtra.'</div>';
}


// Define Amazon request
$id = $_GET['id'];
$type = $_GET['type'];
$pageType = $_GET['pageType'];
$public_key = "0Y0DHAA1TTZN5J5YTD02";
$private_key = "m0mSKuySQMRvV3JEKol5t6aS9LZ0WBoFt8X0Qh79";
$xml = aws_signed_request("com", array("Operation"=>"ItemLookup","ItemId"=>$id,"Idtype"=>$type,"AssociateTag"=>"theofficiasho-20","MerchantId"=>"All","ResponseGroup"=>"Offers, Reviews, EditorialReview, Images, ItemAttributes"), $public_key, $private_key);
?>


<?php //var_dump($xml) ?>


<html lang="en">

<head>
<meta name="keywords" content="<?php if (strcasecmp($xml->Items->Request->IsValid, 'True') == 0){ ?><?=$xml->Items->Item->ItemAttributes->Title?><?php } ?>" />
<meta name="description" content="<?php if (strcasecmp($xml->Items->Request->IsValid, 'True') == 0){ ?><?=$xml->Items->Item->ItemAttributes->Title?><?php } ?>" />
<title><?php if (strcasecmp($xml->Items->Request->IsValid, 'True') == 0){ ?><?=$xml->Items->Item->ItemAttributes->Title?><?php } ?></title>
<?php include "../ssi/meta.php"; ?>
</head>

<body>

<?php include "../ssi/header.php"; ?>

<div id="syl-body-bkg">
  <div id="syl-body">
    <div id="syl-body1">
      <div class="contentWidth clearfix">
        <nav id="syl-breadcrumb" class="breadcrumbs pathway">
        	<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/books-dvds/<?= $pageType ?>s-index.php" class="pathway"><?= $pageType ?>s</a> <img src="/templates/syl/images/arrow.png" /> <?php if (strcasecmp($xml->Items->Request->IsValid, 'True') == 0){ ?><?=$xml->Items->Item->ItemAttributes->Title?><?php } ?>
        </nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_".$pageType."s.php"; ?>
				</div>

				<h1>Thanks for you interest in our instructional books and videos!</h1>

				<br>

				<p>We're currently working to improve our shopping experience for our students, but we don't want to you stop your training without our learning materials!  Please visit our friends at <a href="http://www.martialartsmart.com">MartialArtsMart.com</a> where you'll find our full sellection of books and videos as well that of our many martial arts colleages from around the world.</p> 


      </div>
    </div>
  </div>
</div>

<?php include "../ssi/footer.php"; ?>

</body>

</html>