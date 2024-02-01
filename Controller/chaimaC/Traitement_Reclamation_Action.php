<!-- ISAJALLLL FIL BASSSE DE DONNNNE PROMOTIONNN -->
<?php
include 'Gestion_Reclamation.php';



$error = "";

// create reclamation
$reclamation = null;

$curentDate= date('Y-m-d H:i:s');


// create an instance of the controller
$reclamation_gestion = new reclamation_gestion();
if (isset($_POST["idUser"]) && isset($_POST["suijet"]) && isset($_POST["textarea"])) 
{
    if (!empty($_POST['idUser']) &&  (!empty($_POST["suijet"]) && !empty($_POST["textarea"])) )
     {
        $reclamation = new reclamation(null,$_POST['idUser'],new DateTime($curentDate) ,$_POST['suijet'] , $_POST['textarea'] ); 
        $reclamation_gestion->addReclamation($reclamation);

        $client =  $reclamation_gestion->showClient($_POST["idUser"])  ; 

    } else
        {$error = "Missing information";
         echo $error ; }

}


?>




<!---------------------- YIB3AF MAIL IL USER -------------------------------------------->


<!-- YIB3AF MAILLLL -->

<?php

//Import PHPMailer classes into the global namespace
//hese must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php' ; 
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST["idUser"]) && isset($_POST["suijet"]) && isset($_POST["textarea"])) 
{
    if (!empty($_POST['idUser']) &&  (!empty($_POST["suijet"]) && !empty($_POST["textarea"])) )
     {

$nom = $client['firstName'] ; 
$prenom = $client['lastName'] ; 
$email1 = $client['email'] ; 

$suijet = $_POST['suijet'] ; 
$textarea = $_POST['textarea'] ;


  

  $message1 ='<div width="100%" style="margin:0;padding:0;background:#fafafa"><div class="adM">
  </div><div style="color:transparent;opacity:0;font-size:0px;border:0;max-height:1px;width:1px;margin:0px;padding:0px;border-width:0px!important;display:none!important;line-height:0px!important"><img border="0" width="1" height="1" src="https://ci5.googleusercontent.com/proxy/AiZz-SYQf_AzmtXqIudlNanVunsV5Rg4k-cKtZG0WVu625-jkR5YVs-pgmHbbmUfXkzv2N_HB59hBJL4lB_2FEDSywt_z-j4Mitl3YQFP84ilmQmVltR9HS2_MxD9Tyy5TMW-SpAp08UqL-WJPZi2wStJUCbjZAUeUbB-dBMwReoGXjH5sPm9sjwGxsLw8q6nMJAUa-88UZMccv6exAkALQy_9U=s0-d-e1-ft#http://tracking.masterclass.com/q/G8dN7as4QuRclt_mRRgcSA~~/AANXAQA~/RgRnSLWPPVcDc3BjQgplX48wZmXEvy3mUhhuYWFuYWFjaGFpbWEwMkBnbWFpbC5jb21YBAAAAAA~" alt="" class="CToWUd" data-bit="iit"></div>
  <span style="color:transparent;display:none;opacity:0;height:0;width:0;font-size:0">RECLAMTION DU CLIENT</span><img src="https://ci6.googleusercontent.com/proxy/eGQznWLZMWAamJfIr0E23fCehTvoa6kJcs6fGyxVrAnwLhWoShKKOorurvtRuiXNXtqvyFbVOTLv0nXJiXBWKogAA58JA6paFb_XIlNvUattOHf_ydzOqvgGSKShZ8O6012XwOrWpd0rNntBvYWongkvri2KIlL5i4b1pe3uPLzxgJsK4Kn2Z51BG4neGkAOOjymVlAsisosbFl-bCdjMtTOnLjrVtFKCMYgv7dZQt-F1FvRS4B50_J1WH1XNWqV36EvZlucErMf0zu_Miu2CHjXzQUR-Y85nQ9HwVhv3I8wNEfGRP9R3HeQUdgGp64I5upK8KXN3rAFaDkm6c7b9O0FINElmxp0Gj0ocJ0DCSN8w1fKq84wHIZMSghX-A=s0-d-e1-ft#https://links.masterclass.com/e/eo?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=xrTxozP55QBOE_At31PLDGgm10BLkHU600Y_bShcaaRPQlznhFbusI4bSSxOwBnTGM9DP8b0g_x-AWIn06pQap6nIMteyWqRJFfMrPApiReKQBbhW2QcTxur-L_p734Kg4aL2-NQqTy9wokTwx_gpQ%3D%3D" style="border:0;width:1px;height:1px;border-width:0px!important;display:none!important;line-height:0!important" width="1" height="1" class="CToWUd" data-bit="iit"> <div style="display:none;max-height:0px;overflow:hidden">  </div>  <div style="display:none;max-height:0px;overflow:hidden"> <div>   </div>  </div>  <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="640" align="center" style="max-width:640px;width:640px;margin:0 auto;background:#000000;color:#fffef2">  <tbody><tr> <td align="center" style="background:linear-gradient(#000000,#000000);background-color:#000000"> <a style="text-decoration:none" href="" target="_blank" data-saferedirecturl=""> <img src="https://ci6.googleusercontent.com/proxy/H7ktRZI3tBfpK1rm2hvBlvnwQ914lQS0PEo2cDCyjt89eIUBXo9yX3zLg6f-151-YBiE0ka5detu6yYvnPE9nV5AbGc4qrE9k5abiF6cG2Tkl2Al1b7VWzIjpKsR5-s=s0-d-e1-ft#https://th.bing.com/th/id/OIP.xbJ0e-I28Vxr7q2RigBi7wHaLH?rs=1&amp;pid=ImgDetMain" width="640" style="vertical-align:top;max-width:640px;width:100%" alt="" class="CToWUd" data-bit="iit"> </a> </td> </tr>  <tr> <td style="padding:48px 64px 12px;background:linear-gradient(#000000,#000000);background-color:#000000"> <div> <div> <a style="text-decoration:none;color:#fffef2" href="https://www.facebook.com/NOUSedition" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/NOUSedition&amp;source=gmail&amp;ust=1701472216344000&amp;usg=AOvVaw3ym4V6tfeXwB6727cWVRj7"> <h1 style="font:bold 38px/52px Arial;text-align:center;margin:auto;max-width:640px">NOUS EDITION</h1> </a> </div> </div> </td> </tr>  <tr> <td style="padding:0 64px 24px;background:linear-gradient(#000000,#000000);background-color:#000000"> <div> <div> <p style="font:normal 20px/30px Arial;color:#e0e0e0;text-align:center;margin:0 auto;max-width:380px">         </p><h2> Bonjour '.$nom.' '.$prenom.', <br> Nous vous informons que votre reclamation a ete transmise.
</h2> 
 <p></p> </div> </div> </td> </tr>  <tr> <td align="center" style="padding:0 64px 24px;background:linear-gradient(#000000,#000000);background-color:#000000"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzKZ2AfIk9vDAKk9lzYWeZUrPgNW7_Omz_DdNT7uIgiEMTH3fLm_sYpulKhBEdLX02c8IJb0lcQUnSgOgoC1EbB_J5cruwbcsiU2g2SxTw4HFeGMQUw3x50bEVo0w2ej6qUuWZXwFqmDQ4KVCYZAzd8pQCJZv333iwX6XWEGQiuWEdQrU9ZkyzpPtoqCzog4Zd7H8-nxdDLy5okoC7mycQt5zIm1AowdrdJ-Tyq3VS25hgvLEDGi7C7ZBlwImLcPHjOQBTbjj7qO5d4D5jPV6Tt8bRmhjm-_ugJRCFBVXg-D3fnMiINcGKY3hRN4oxBase6jFG2JamE0KQRXCfl5GikOUN0unATdWkGixV4EdHiWjZXq3u3E12t0K0HLcqZ8TW2zOZHpGqNnNvBSH4rQy1ZI%3D" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzKZ2AfIk9vDAKk9lzYWeZUrPgNW7_Omz_DdNT7uIgiEMTH3fLm_sYpulKhBEdLX02c8IJb0lcQUnSgOgoC1EbB_J5cruwbcsiU2g2SxTw4HFeGMQUw3x50bEVo0w2ej6qUuWZXwFqmDQ4KVCYZAzd8pQCJZv333iwX6XWEGQiuWEdQrU9ZkyzpPtoqCzog4Zd7H8-nxdDLy5okoC7mycQt5zIm1AowdrdJ-Tyq3VS25hgvLEDGi7C7ZBlwImLcPHjOQBTbjj7qO5d4D5jPV6Tt8bRmhjm-_ugJRCFBVXg-D3fnMiINcGKY3hRN4oxBase6jFG2JamE0KQRXCfl5GikOUN0unATdWkGixV4EdHiWjZXq3u3E12t0K0HLcqZ8TW2zOZHpGqNnNvBSH4rQy1ZI%253D&amp;source=gmail&amp;ust=1701472216344000&amp;usg=AOvVaw1dLwelVd8_8Tl_f17Y0kF4"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center"> <tbody><tr>  </tr> </tbody></table> </a> </td> </tr>  <tr> <td style="padding:0 64px 32px;background:linear-gradient(#000000,#000000);background-color:#000000"> <div> <div>  </div> </div> </td> </tr>  <tr> <td valign="top" align="center" style="background:linear-gradient(#000000,#000000);background-color:#000000"> <hr style="margin:0;border-width:0;height:1px;width:536px;background:#828282;color:#828282"> </td> </tr>  </tbody></table>       <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="640" align="center" style="background:#000000;max-width:640px;width:640px;margin:0 auto;padding:0">   <tbody><tr> <td align="center" style="padding:48px 0;background:linear-gradient(#000000,#000000);background-color:#000000"><a style="text-decoration:none" href="" target="_blank" data-saferedirecturl=""> <img src="https://scontent.ftun9-1.fna.fbcdn.net/v/t39.30808-6/277587577_386353796828688_6650999188134237628_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=SWjqEipXh70AX-P44R5&_nc_ht=scontent.ftun9-1.fna&oh=00_AfDtC2cAaFx2DtJW7Wbmr53i9NvFsgu6E1FAhIpt3MLbFw&oe=65746D16" width="100" style="vertical-align:middle;max-width:55px" alt="MasterClass" class="CToWUd" data-bit="iit"> </a> </td> </tr>  <tr> <td align="center" style="padding:0 0 24px;background:linear-gradient(#000000,#000000);background-color:#000000"> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr>  <td align="center" style="padding:0 5px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzCmmfAR3GQgtdU1THoFjWlxCfHF2V4LQpSza1VvDIv7A1TJ4T3AvR1EwXS4Y0J8K3jxSdkbqrKtAr3nLM1EofyE6h7OmlldvlIvyUTiCdCw12LVF1iiynB1HUyVCuql-CdgBIZvgK5IlYBTjxBkONc5FFCLm81H00lb6Ipz65tSmtkNNs9xDzXRn5J0V8OHKhJlxjSq_D-0Mc7RQC3dP5MGOH0sktiWy8HFBrhakw4U9zv0dXygO3lKgCavc3t78QeQYaLKJyOsBa2ZWV0M1gcHmdvu34iCQz4NCao6WDCKKTxq6wt_Tr5XyYk7fy296BY7Xgv-Z8Rs0eTQubA-1vawTp7Vce9t76nr3sxE0YUQIg0yZULQFXRYkom-RsHTiTO2cjdZTKTeb356da74hiUk%3D" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzCmmfAR3GQgtdU1THoFjWlxCfHF2V4LQpSza1VvDIv7A1TJ4T3AvR1EwXS4Y0J8K3jxSdkbqrKtAr3nLM1EofyE6h7OmlldvlIvyUTiCdCw12LVF1iiynB1HUyVCuql-CdgBIZvgK5IlYBTjxBkONc5FFCLm81H00lb6Ipz65tSmtkNNs9xDzXRn5J0V8OHKhJlxjSq_D-0Mc7RQC3dP5MGOH0sktiWy8HFBrhakw4U9zv0dXygO3lKgCavc3t78QeQYaLKJyOsBa2ZWV0M1gcHmdvu34iCQz4NCao6WDCKKTxq6wt_Tr5XyYk7fy296BY7Xgv-Z8Rs0eTQubA-1vawTp7Vce9t76nr3sxE0YUQIg0yZULQFXRYkom-RsHTiTO2cjdZTKTeb356da74hiUk%253D&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw2kUInLjNJJXNquYNfkPJsO">  </a> </td>  <td align="center" style="padding:0 5px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzCmmfAR3GQgtdU1THoFjWlzDGa1HZ7mvWq8ozPSTl_Pmm9aouJbYmeGU17pvWS9Twi1Q0oPxz2dwZLSRgSV_Q3I7hJuQ6HUqMmyVDWcc7eV_l6AozKqSTMLsh4q0-TtfBLBI76h5O1iylMvEUj2GS86nQ9vfBQvyCQ-vX844WsVXDcJcsT9-IvGPtoKahkB9r0p4z7H3hTRnH5RvXUa1ZSJQDS4r04zvXwJ5HUGpSN8F4hkSMpZHTKg6cnuwS1UECIXVtMem_3S7e_YAwqIrglrwT5IjchWBf5upjrFPmSxUg5sny3qVmvuOu6wH2uhyPeMMPma4c16P-8CLKQagspa3WLthR4_LaqeHcRms0jdd5jaHgfybvWr89lVnotnYcZpzC4sZG8Wm6HgBTqGO8dc%3D" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzCmmfAR3GQgtdU1THoFjWlzDGa1HZ7mvWq8ozPSTl_Pmm9aouJbYmeGU17pvWS9Twi1Q0oPxz2dwZLSRgSV_Q3I7hJuQ6HUqMmyVDWcc7eV_l6AozKqSTMLsh4q0-TtfBLBI76h5O1iylMvEUj2GS86nQ9vfBQvyCQ-vX844WsVXDcJcsT9-IvGPtoKahkB9r0p4z7H3hTRnH5RvXUa1ZSJQDS4r04zvXwJ5HUGpSN8F4hkSMpZHTKg6cnuwS1UECIXVtMem_3S7e_YAwqIrglrwT5IjchWBf5upjrFPmSxUg5sny3qVmvuOu6wH2uhyPeMMPma4c16P-8CLKQagspa3WLthR4_LaqeHcRms0jdd5jaHgfybvWr89lVnotnYcZpzC4sZG8Wm6HgBTqGO8dc%253D&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw2Z0yw2Mb73-IO7xfH_CQyN">  </a> </td>  <td align="center" style="padding:0 5px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzJUb0XT_BAeAU_awgRlu4SuSQynPMJUZpf5Ul8r_AicPHXuJZAq8Q18GeJDHWdpaq8gDTDXf5rEE4aRUSxW_GvzVZrN2en9c-UDrQfzQnGU0zJUjzzwQuiDcSr6hb8IFqJw-qRZ0YSLn8T4DPcFWzM0QkMxGveXNxtMuRIPIPmEcEk1OyKDtEzV8zzI-4aogMDncssaMWvzVOJxX1lSTwAzOgHtYPVyPQexdVEJO6RfOGphTEToNeQgdxxgSRTRUg3jzdk38EsX9iuOy0ExPsP5bMppDRu8yZuVsdXPqNVA9z86fTI-i96K5zxIjyqRw1M-nR8kK3vAS-qPqBNFLNuoenoGzwl6aDrHeQF9k_S3mJGTc0no4J_lO687wPBXZEMSFnkmhIGEGZfyMW7RJPD47Ru139wJek9asfifVVBZ8Rcb3aNhymU5Able9qpJOIg%3D%3D" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzJUb0XT_BAeAU_awgRlu4SuSQynPMJUZpf5Ul8r_AicPHXuJZAq8Q18GeJDHWdpaq8gDTDXf5rEE4aRUSxW_GvzVZrN2en9c-UDrQfzQnGU0zJUjzzwQuiDcSr6hb8IFqJw-qRZ0YSLn8T4DPcFWzM0QkMxGveXNxtMuRIPIPmEcEk1OyKDtEzV8zzI-4aogMDncssaMWvzVOJxX1lSTwAzOgHtYPVyPQexdVEJO6RfOGphTEToNeQgdxxgSRTRUg3jzdk38EsX9iuOy0ExPsP5bMppDRu8yZuVsdXPqNVA9z86fTI-i96K5zxIjyqRw1M-nR8kK3vAS-qPqBNFLNuoenoGzwl6aDrHeQF9k_S3mJGTc0no4J_lO687wPBXZEMSFnkmhIGEGZfyMW7RJPD47Ru139wJek9asfifVVBZ8Rcb3aNhymU5Able9qpJOIg%253D%253D&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw1NvND6g49ahxhukSt4pNHM">  </a> </td>  <td align="center" style="padding:0 5px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzCOwd-xFAGaVonVDA7KEBQMKw01GTiJViX16cDDdWINwhF3Kbvjhf7M_4m64Ql1uzc3l2LjQkyJuZnEiV0hiFvwFIFoHUx15Ls4egxmNKCHwjNlUZZ4kSF_ACfffpKjpYhzlV7bYN11N-Pz9kVhcXLotioY4ShC8FYu89ftMyfJa-oEVjlmb19s0Z_iPWMDy60bNhaYCW11fghUMDNZuTFx7eB30m52O-p-IRTLFcunVCBN7UIYJ2OxBehEmUCMMkWdrFu7tRensTGLVkCUTSp3IqePrNgk_jFZrQJ0ZCagpPLhkpBPsLeJMJBbcacBs83PzbF5_bFN9mHJIsKfQ0-sVMMQ7JiqUpqD1V0iegdOHSzkJFyE0cN2DHiwV41swMXrlllugVcQfCueXw0qKe_xFF9bZhWBhgjwPrujByiWmTW93I1ZDQUFh664t3_b7-Q%3D%3D" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzCOwd-xFAGaVonVDA7KEBQMKw01GTiJViX16cDDdWINwhF3Kbvjhf7M_4m64Ql1uzc3l2LjQkyJuZnEiV0hiFvwFIFoHUx15Ls4egxmNKCHwjNlUZZ4kSF_ACfffpKjpYhzlV7bYN11N-Pz9kVhcXLotioY4ShC8FYu89ftMyfJa-oEVjlmb19s0Z_iPWMDy60bNhaYCW11fghUMDNZuTFx7eB30m52O-p-IRTLFcunVCBN7UIYJ2OxBehEmUCMMkWdrFu7tRensTGLVkCUTSp3IqePrNgk_jFZrQJ0ZCagpPLhkpBPsLeJMJBbcacBs83PzbF5_bFN9mHJIsKfQ0-sVMMQ7JiqUpqD1V0iegdOHSzkJFyE0cN2DHiwV41swMXrlllugVcQfCueXw0qKe_xFF9bZhWBhgjwPrujByiWmTW93I1ZDQUFh664t3_b7-Q%253D%253D&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw0mYuAGOb_slxm-bI0sGz9G">  </a> </td>  <td align="center" style="padding:0 5px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzFD8qg0NnpyeGQ1n41jG9lAGlyEcn8ERQ1PUngSeBuL7sihNDs-XM4Pl-BeK6MbojEPT7sdMQ7MH1nuN3tlJbvnPI_Nx7PPdXV0Uu9FbHaZT9Pcg9RiS91KJ60sSNtd3e-z7xCQQLWcvxLEKPvVoNVVNNRH9f_cPij3PgCFNtBcTFWtK6U-PjuXlUkFfDns2YQdaNE8Qgk9cAVRherqEDtr3DLPKdKvsHiKChC90tWZZ6Jq6FXEnMfMWTiVSkVFhSPk2phZ0Akw8yL7Be5xM2c2i1I5wNFuZHJQsg7O649IC9LGpX9XmjVXRM4exUVzenIHZVW1jBpr1rotyQcQ5WQJOvQ0H9jDxwqOT560EAkT9qjS6hYWlZPEBw4Z1HyRjmIZnHRT_Z-UwTkmZRde5oH_M-6QmvyoiI0Rau2YPvEgq1H78GXbfGPmtgtv1kZ9idJ-zGKjw8Vf68R2LPbF2hKaJ4QZOX6bZPyfsmHHDkDsP" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzFD8qg0NnpyeGQ1n41jG9lAGlyEcn8ERQ1PUngSeBuL7sihNDs-XM4Pl-BeK6MbojEPT7sdMQ7MH1nuN3tlJbvnPI_Nx7PPdXV0Uu9FbHaZT9Pcg9RiS91KJ60sSNtd3e-z7xCQQLWcvxLEKPvVoNVVNNRH9f_cPij3PgCFNtBcTFWtK6U-PjuXlUkFfDns2YQdaNE8Qgk9cAVRherqEDtr3DLPKdKvsHiKChC90tWZZ6Jq6FXEnMfMWTiVSkVFhSPk2phZ0Akw8yL7Be5xM2c2i1I5wNFuZHJQsg7O649IC9LGpX9XmjVXRM4exUVzenIHZVW1jBpr1rotyQcQ5WQJOvQ0H9jDxwqOT560EAkT9qjS6hYWlZPEBw4Z1HyRjmIZnHRT_Z-UwTkmZRde5oH_M-6QmvyoiI0Rau2YPvEgq1H78GXbfGPmtgtv1kZ9idJ-zGKjw8Vf68R2LPbF2hKaJ4QZOX6bZPyfsmHHDkDsP&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw1JU0cFJ332yLx9ZQl2NK_u">  </a> </td>  </tr> </tbody></table> </td> </tr>   <tr> <td align="center" style="padding:0 0 24px;background:linear-gradient(#000000,#000000);background-color:#000000"> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr>  <td align="center" style="padding:0 16px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzE2Hu1i5hkseENnB662G7u8REK7HwK2AEeXvGyXN-6bmiHaVTpZd3JU9Q2LkmBQuELYqA525cqGn7MKXrLjcbHkJ__5knMeOdmNviMv3vInK-GBu8o9MRr3lCIwT4kN2sivtN7OEPlQKZ9uBapFcWFgQHPGzJWkQWwrgs-BAXqKOtQBUXkZLK15kvhT2K0aGr8Gv6XDK52ux-a_Hf6tTV1jZWEh_Q21ylmgUaqsa13olwMjs9tgoc47emHWm4rzcX9TYdWlgCE472Tlm2_DIZffL8ygrcE7BU2dFN2GYKkk8ecr3roCi-bPR1PSp7gQrVrUkI34gb7T17crcBQbh0zfuXsRJMjm1wDSeI5NNoXgqsewB6W89gS345DnxFzQFA_Jl3r0WDLrWHT3szd5_pIc%3D" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzE2Hu1i5hkseENnB662G7u8REK7HwK2AEeXvGyXN-6bmiHaVTpZd3JU9Q2LkmBQuELYqA525cqGn7MKXrLjcbHkJ__5knMeOdmNviMv3vInK-GBu8o9MRr3lCIwT4kN2sivtN7OEPlQKZ9uBapFcWFgQHPGzJWkQWwrgs-BAXqKOtQBUXkZLK15kvhT2K0aGr8Gv6XDK52ux-a_Hf6tTV1jZWEh_Q21ylmgUaqsa13olwMjs9tgoc47emHWm4rzcX9TYdWlgCE472Tlm2_DIZffL8ygrcE7BU2dFN2GYKkk8ecr3roCi-bPR1PSp7gQrVrUkI34gb7T17crcBQbh0zfuXsRJMjm1wDSeI5NNoXgqsewB6W89gS345DnxFzQFA_Jl3r0WDLrWHT3szd5_pIc%253D&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw37ZGat1L73FBT7yl1B94hv">  </a> </td>  <td align="center" style="padding:0 16px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzKg1rw788E39oQdvkCIptaqh1b22GMVRs0D-aPIlQa4jrBFBZu2beW3S4MEHVNjkS7SiQGcYJJA0tpIEXZPdEzbClhrQHW2z-cY-sg2oCP6Wa83i3ktCu248BrXsGloKNCqf5TmKKux3yk27i34zuuvU2YZ2afEbtIqdZwoV0pmdillF3eftgSDq_8HNBDojA410tyNh16EsP7-BXOshlnM2Mj28F7kXWKM-7Ay3es5ZxGOKIBIIqq5qV62yHQJVgvN969H6RT1wTP2Mto1X4UNcGXaFuYHJ1EN82Cjdt5MzVFRboCpKwJWTJsCbaeVZtAhPvWs1pppQhXIKf2zWjpawok-RW_VzNBppmNXqB2u2-d498g6zTUMAYEIWGzkBlgmqi2KVrKMYZAQeUAoBoeY%3D" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzKg1rw788E39oQdvkCIptaqh1b22GMVRs0D-aPIlQa4jrBFBZu2beW3S4MEHVNjkS7SiQGcYJJA0tpIEXZPdEzbClhrQHW2z-cY-sg2oCP6Wa83i3ktCu248BrXsGloKNCqf5TmKKux3yk27i34zuuvU2YZ2afEbtIqdZwoV0pmdillF3eftgSDq_8HNBDojA410tyNh16EsP7-BXOshlnM2Mj28F7kXWKM-7Ay3es5ZxGOKIBIIqq5qV62yHQJVgvN969H6RT1wTP2Mto1X4UNcGXaFuYHJ1EN82Cjdt5MzVFRboCpKwJWTJsCbaeVZtAhPvWs1pppQhXIKf2zWjpawok-RW_VzNBppmNXqB2u2-d498g6zTUMAYEIWGzkBlgmqi2KVrKMYZAQeUAoBoeY%253D&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw2BdWntP40jyGt3wSGmQHdB">  </a> </td>  <td align="center" style="padding:0 16px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzAYrUH7PB5dWeL21s1o-klrlIbR-RtBSQoFmp625wrBZUgMj8QRT1sW7_FJ3Z--7PpbUd1g4nZBWhTtte9Ll2_LWlPPftUIC7L0PY0p5EMXKuZX5E_s1RvosJ60wt6-xOFpmFq5-gzkWowfKk6dKDVh1bDJbaWPBT2D6mDCVgCrdRrD6bsxD5hPZI3vPsE5kvGI1N1pqersvAcDw2KQFqERZ_ReyWpcyZyiBxchtHsU_PBOyBUjzHqb2b8UtPfKMZLkW4rAQXW0dqA4JraFfgh6i1Ia2TSKw_FTc3OHIKIzrfcauwjXlmROWyECu8clxmUEUB1X-TzpfG71sYIpCkulTCXywpvIoPLi7ZdADF4DOLRG9YPNx_SNwS3VWORJ3e-bOOa7jAxO4BJM3WT9By5g%3D" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzAYrUH7PB5dWeL21s1o-klrlIbR-RtBSQoFmp625wrBZUgMj8QRT1sW7_FJ3Z--7PpbUd1g4nZBWhTtte9Ll2_LWlPPftUIC7L0PY0p5EMXKuZX5E_s1RvosJ60wt6-xOFpmFq5-gzkWowfKk6dKDVh1bDJbaWPBT2D6mDCVgCrdRrD6bsxD5hPZI3vPsE5kvGI1N1pqersvAcDw2KQFqERZ_ReyWpcyZyiBxchtHsU_PBOyBUjzHqb2b8UtPfKMZLkW4rAQXW0dqA4JraFfgh6i1Ia2TSKw_FTc3OHIKIzrfcauwjXlmROWyECu8clxmUEUB1X-TzpfG71sYIpCkulTCXywpvIoPLi7ZdADF4DOLRG9YPNx_SNwS3VWORJ3e-bOOa7jAxO4BJM3WT9By5g%253D&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw2K6OMyE13WGIv62bIsrrbp">  </a> </td>  <td align="center" style="padding:0 16px"> <a style="text-decoration:none" href="https://www.facebook.com/NOUSedition" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/NOUSedition&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw1u3T-9SGfcYHXyC5GphLmL">  </a> </td>  <td align="center" style="padding:0 16px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzFdYAZt5Z5wgRRsqB5oEuKGYdreG2fl9pGUtYcLljO0weSYp9nr_SdtTRrPeDV-Uy6PQl_oKuk48EIv67lRiblL4KVBsM7KfiS4EN7pvTbzcgTsR7WDQZPq62x9b5rW26t-k4TjhD3CnawI4Z9NwN7wKmJJOWufuMZ4s03yKynSaaM3IfdT9JjrMZ4X-XByYSrs5EzVDD4qzSvSQ3b0ZktpbR64UVmvoPSCM-lesMGRDCargDzH5Nu9ADHw-QjzDHiaGz6HW8sQarpRk6-ECAAjD5410XDEsmhfM7-hu9Egi53a8qsPdcwC-vZZEa1DsJr2kXUkjHpxOXog1aMCeGjYaoN8IYLLfHsbd80VbqDh2ji3smwCsozua7vJBlavqACCzCV9T1-b-sZpCX1b9YGOqDxjRdui22tXNkS_f1IAO" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzFdYAZt5Z5wgRRsqB5oEuKGYdreG2fl9pGUtYcLljO0weSYp9nr_SdtTRrPeDV-Uy6PQl_oKuk48EIv67lRiblL4KVBsM7KfiS4EN7pvTbzcgTsR7WDQZPq62x9b5rW26t-k4TjhD3CnawI4Z9NwN7wKmJJOWufuMZ4s03yKynSaaM3IfdT9JjrMZ4X-XByYSrs5EzVDD4qzSvSQ3b0ZktpbR64UVmvoPSCM-lesMGRDCargDzH5Nu9ADHw-QjzDHiaGz6HW8sQarpRk6-ECAAjD5410XDEsmhfM7-hu9Egi53a8qsPdcwC-vZZEa1DsJr2kXUkjHpxOXog1aMCeGjYaoN8IYLLfHsbd80VbqDh2ji3smwCsozua7vJBlavqACCzCV9T1-b-sZpCX1b9YGOqDxjRdui22tXNkS_f1IAO&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw3X5V0fgsmxjuUp3W3CMR5s">  </a> </td>  <td align="center" style="padding:0 16px"> <a style="text-decoration:none" href="https://links.masterclass.com/u/click?_t=c862c12dcd894e7aaa5de2c182120673&amp;_m=88b081fb93024fdd89435045e1d0d609&amp;_e=mO7TPhevMCB5shzX9B4tzM7-gmVFG9OnF18HOsrFD63IHrzMWFXzbdREs68nV5wn2Y8ANh3uGIxe7eCHJTz0jyi_6rKWkHl7F6WOOkHHn6dIirQBJei80aHujUaYjORSDB_fQdlWVxnSBEu2e7JRmYlbID-h7Fye68yXuAPtH2LQW3HwYX4MJyjcNOeE6f9Z9m3bObR7-xXv3gRnB6rPEBhDhS2rN-6-PKIxhA6b7qGz-GdCiHaVmkqU62FLRC-CIHuq-Ik6czUZfE4JAlQELC5DigO0m0LNmv70tZXrI9FFsPXFnZNr9Bk9kk8JKNw_MshRdETbCyRntk4hQ-Z10SBTcs0j9Pmqn_C1XujkrUjiluM5-WX89g5CyJV38DVVCs_6_KS7we-Zot28EUZB9Zl4pkAq0sLl0I9Ro3PTWOI%3D" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://links.masterclass.com/u/click?_t%3Dc862c12dcd894e7aaa5de2c182120673%26_m%3D88b081fb93024fdd89435045e1d0d609%26_e%3DmO7TPhevMCB5shzX9B4tzM7-gmVFG9OnF18HOsrFD63IHrzMWFXzbdREs68nV5wn2Y8ANh3uGIxe7eCHJTz0jyi_6rKWkHl7F6WOOkHHn6dIirQBJei80aHujUaYjORSDB_fQdlWVxnSBEu2e7JRmYlbID-h7Fye68yXuAPtH2LQW3HwYX4MJyjcNOeE6f9Z9m3bObR7-xXv3gRnB6rPEBhDhS2rN-6-PKIxhA6b7qGz-GdCiHaVmkqU62FLRC-CIHuq-Ik6czUZfE4JAlQELC5DigO0m0LNmv70tZXrI9FFsPXFnZNr9Bk9kk8JKNw_MshRdETbCyRntk4hQ-Z10SBTcs0j9Pmqn_C1XujkrUjiluM5-WX89g5CyJV38DVVCs_6_KS7we-Zot28EUZB9Zl4pkAq0sLl0I9Ro3PTWOI%253D&amp;source=gmail&amp;ust=1701472216345000&amp;usg=AOvVaw02vMsKJainbnFGz6V4X9OJ">  </a> </td>  </tr> </tbody></table> </td> </tr>  <tr> <td align="center" style="padding:0 0 32px;color:#ffffff;background:linear-gradient(#000000,#000000);background-color:#000000"> <div>  </div> </td> </tr>  <tr> <td valign="top" align="center" style="padding:0 0 32px;color:#ffffff;background:linear-gradient(#000000,#000000);background-color:#000000"> <div> <div>  </div> </div> </td> </tr>  </tbody></table>  
  <img border="0" width="1" height="1" alt="" src="https://ci6.googleusercontent.com/proxy/d3vesDfxZG2ZQdxKjYoKdxTaHlWEVfR01LIhvf-a-INgaw3leCFhy5lwYHRa3zjsJJ5D3U4AsT7GwSqoxfUPD3CoNuZD2cyI_Eymv9x5sgMfsx5OrKBsKvb_RhmkY94_IECwXyNDbCJ4KIRvoO712cMDslleVdD0t0JrZXuBKKszNzLfCOW4CeKJL4lWXsdfbSyX7PdnDndfl3n6ldfNBsCQWKI=s0-d-e1-ft#http://tracking.masterclass.com/q/LazDsU41phf29gKCXxAu7g~~/AANXAQA~/RgRnSLWPPlcDc3BjQgplX48wZmXEvy3mUhhuYWFuYWFjaGFpbWEwMkBnbWFpbC5jb21YBAAAAAA~" class="CToWUd" data-bit="iit"><div></div><div>
  </div></div>' ; 



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'naanaachaima02@gmail.com';                     //SMTP username
    $mail->Password   = 'dsxf uzms vtfj nvjw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('chaima.naanaa@esprit.tn', 'Reclamation');
    $mail->addAddress($email1);     //Add a recipient
 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reclamation ';
    $mail->Body    = $message1 ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
    $mail->send();



    
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
        <link rel="stylesheet" href="../../View/memorial/css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="../../View/memorial/css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="../../View/memorial/css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="../../View/memorial/images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="../../View/memorial/css/jquery.mCustomScrollbar.min.css">
        
        <title>Reclamation</title>
        <link rel="stylesheet" href="../../View/memorial/chaimaV1/reclamationCstyle.css"> <!--he8i a3maltha ana lil reclamation-->
    

        <style>
        .reclamation-box {
         background: white;
         display: flex;
         justify-content: center;
     }
        
        .sizeimg
        { 
         width : 40px ; 
         height : 40px ; 
        }
        .sizeimg:hover
        { 
         width : 60px ; 
         height : 60px ; 
        }
       
        
        </style>
        </head>
    <body>
        <header>
            <!-- header inner -->
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo"> <a href="index.html"><img src="../../View/memorial/images/logo.png" alt="#"></a> </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                           <div class="limit-box">
                              <nav class="main-menu">
                                 <ul class="menu-area-main">
                                    <li class="active"> <a href="index.html">Home</a> </li>
                                    <li> <a href="about.html">About us</a> </li>
                                    <li><a href="books.html">Our Books</a></li>
                                    <li><a href="library.html">library</a></li>
                                    <li><a href="contribution.html">Contribuer</a></li>
                                    <li class="mean-last"> <a href="#"><img src="../../View/memorial/images/search_icon.png" alt="#" /></a> </li>
                                    <li class="mean-last"> <a href="#"><img src="../../View/memorial/images/top-icon.png" alt="#" /></a> </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>      
            <!-- end header inner -->
         </header>
         <br><br><br>
    <!--  -->
         <div class="reclamation-bg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="reclamationtitle">
                        <h2>Reclamation</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section >
            <div class="reclamation-box">
                <div class="reclamation-left">

                <a href="../../view/memorial/reclamationC.php"><img class="sizeimg" src="../../view/memorial/chaimaV1/retourne_fleche.png"></a> 

                <br><br>
                    <h3 >Message has been sent</h3>

                </div>   
            <div>    
        </section>
    
      
          <!-- footer -->
          <footer>
            <div class="footer">
               <div class="container">
                  <div class="row pdn-top-30">
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="Follow2">
                           <h3>Follow Us</h3>
                        </div>
                        <ul class="location_icon2">
                           <li> <a href="#"><img src="../../View/memorial/icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="../../View/memorial/icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="../../View/memorial/icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="../../View/memorial/icon/instagram.png"></a></li>
                        </ul>
                     </div>
                     
                  </div>
               </div>
            </div>
           
         </footer>
        
       
    </body>
    </html>';


    

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

     }
   }

?>





