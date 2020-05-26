<?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**
 You should not modify anything above this line
*/

// @TODO : Your code starts here
$extrapolateData = explode(",",$county_data);
$arrlength = count($extrapolateData);
$unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NAIROBI STATISTICS</title>
  <style>
  table, th, td {
  border: 1px solid black;
}

  </style>
</head>

<body>
        <table>
          <thead>
            <tr>
              <th># </th>
              <th>Name</th>
              <th>Governor</th>
              <th>Party</th>
              <th>Website</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $j=1;
            for($x = 0; $x < $arrlength; $x++) {
              $getData = explode(" – ",$extrapolateData[$x]);
              $datalength = count($getData);?>
            <tr>
              <td><?php echo $j++?></td>
              <td>
                <?php
                  $cleanString = str_replace($unwantedCharacters, "", $getData[0]);
                  echo $cleanString;?>
              </td>
              <td>
                <?php
                    echo $getData[1];?>
              </td>
              <td><?php
              if(!empty($getData[2])){
                if($getData[2] == "WDM K."){
                  echo "WDM K";
                }else{
                  echo $getData[2];
                }
              }
              else {
                if(strpos($getData[1],"- Jubilee")){
                  echo "Jubilee";
                }
                elseif(strpos($getData[1],"- ODM")){
                    echo "ODM";
                }
              }?></td>
              <?php
                $cleanString = str_replace($unwantedCharacters, "", $getData[0]);
                $link = strtolower(str_replace(' ', '', $cleanString));?>
              <td><a target="_BLANK"
                  href="http://<?php echo $link?>.go.ke">http://<?php echo $link;?>.go.ke</a></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
</body>

</html>
