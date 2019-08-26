<?php
//test this link to show value
//https://newsapi.org/v2/everything?q=bitcoin&from=2019-07-23&sortBy=publishedAt&apiKey=e5430ac2a413408aaafdf60bfa27a874
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://newsapi.org/v2/everything?q=bitcoin&from=2019-07-23&sortBy=publishedAt&apiKey=e5430ac2a413408aaafdf60bfa27a874",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }

$jsonData = Array();
$jsonData = json_decode($response);
echo $jsonData->status; //oke
echo sizeof($jsonData->articles); //20
echo $jsonData->articles[0]->author; //Francois Aure
echo $jsonData->articles[1]->author; //Therese Poletti
echo $jsonData->articles[0]->source->name; //Crypto Coins News

/*

{
    "status": "ok",
    "totalResults": 5903,
    "articles": [
        {
            "source": {
                "id": "crypto-coins-news",
                "name": "Crypto Coins News"
            },
            "author": "Francois Aure",
            "title": "Brian Kelly Is Short-Term Bearish but Sees 'Generational Opp' in Bitcoin",
            "description": "By CCN Markets: The bitcoin price might have broken back above the $10,000 level today, but one notable trader isn’t impressed. Speaking on CNBC, crypto investor Brian Kelly, who is usually the biggest bitcoin bull in the room, made it clear that he has turne…",
            "url": "https://www.ccn.com/brian-kelly-is-short-term-bearish-but-sees-generational-opp-in-bitcoin/",
            "urlToImage": "https://www.ccn.com/wp-content/uploads/2019/08/brian-kelly-cnbc-youtube.jpg",
            "publishedAt": "2019-08-23T02:00:23Z",
            "content": "By CCN Markets: The bitcoin price might have broken back above the $10,000 level today, but one notable trader isnt impressed. Speaking on CNBC, crypto investor Brian Kelly, who is usually the biggest bitcoin bull in the room, made it clear that he has turned… [+2498 chars]"
        },
        {
            "source": {
                "id": null,
                "name": "Marketwatch.com"
            },
            "author": "Therese Poletti",
            "title": "MarketWatch First Take: The latest chapter in Patrick Byrne’s soap opera doesn’t change much for Overstock",
            "description": "The sudden resignation of Patrick Byrne, Chief Executive and founder of Overstock.com Inc., a week after he admitted having an affair with a Russian spy and giving important information to the “men in black” in Washington, was followed up with a lengthy inter…",
            "url": "https://www.marketwatch.com/story/the-latest-chapter-in-patrick-byrnes-soap-opera-doesnt-change-much-for-overstock-2019-08-22",
            "urlToImage": "http://s.marketwatch.com/public/resources/MWimages/MW-HP368_overst_ZG_20190813221111.jpg",
            "publishedAt": "2019-08-23T01:30:12Z",
            "content": "The sudden resignation of Overstock.com Inc. founder and Chief Executive Patrick Byrne takes away a major distraction, but doesnt solve any issues for the questionable company.\r\nByrne announced his resignation Tuesday morning, a week after he told the world i… [+4839 chars]"
        }
    ]
}


*/