<?php
  $döviz = file_get_contents("https://finans.truncgil.com/today.json");
  $veri =json_decode($döviz,1);
  define("USDALİS", $veri["USD"]['Alış']);
  define("USDSATİS", $veri["USD"]['Satış']);
  define("USDDEGİSİM", $veri["USD"]['Değişim']);
  
  
  define("EURALİS", $veri["EUR"]['Alış']);
  define("EURSATİS", $veri["EUR"]['Satış']);
  define("EURDEGİSİM", $veri["EUR"]['Değişim']);
  
  
  define("STRALİS", $veri["GBP"]['Alış']);
  define("STRSATİS", $veri["GBP"]['Satış']);
  define("STRDEGİSİM", $veri["GBP"]['Değişim']);
  
  
  define("CHFALİS", $veri["CHF"]['Alış']);
  define("CHFSATİS", $veri["CHF"]['Satış']);
  define("CHFDEGİSİM", $veri["CHF"]['Değişim']);
   
  
  define("CADALİS", $veri["CAD"]['Alış']);
  define("CADSATİS", $veri["CAD"]['Satış']);
  define("CADDEGİSİM", $veri["CAD"]['Değişim']);
  
  
  define("RUBALİS", $veri["RUB"]['Alış']);
  define("RUBSATİS", $veri["RUB"]['Satış']);
  define("RUBDEGİSİM", $veri["RUB"]['Değişim']);
  
  
  define("AEDALİS", $veri["AED"]['Alış']);
  define("AEDSATİS", $veri["AED"]['Satış']);
  define("AEDDEGİSİM", $veri["AED"]['Değişim']);
  
  
  define("AUDALİS", $veri["AUD"]['Alış']);
  define("AUDSATİS", $veri["AUD"]['Satış']);
  define("AUDDEGİSİM", $veri["AUD"]['Değişim']);
  
  
  define("DKKALİS", $veri["DKK"]['Alış']);
  define("DKKSATİS", $veri["DKK"]['Satış']);
  define("DKKDEGİSİM", $veri["DKK"]['Değişim']);
  
  
  define("SEKALİS", $veri["SEK"]['Alış']);
  define("SEKSATİS", $veri["SEK"]['Satış']);
  define("SEKDEGİSİM", $veri["SEK"]['Değişim']);
  
  
  define("NOKALİS", $veri["NOK"]['Alış']);
  define("NOKSATİS", $veri["NOK"]['Satış']);
  define("NOKDEGİSİM", $veri["NOK"]['Değişim']);
  
  
  define("JPYALİS", $veri["JPY"]['Alış']);
  define("JPYSATİS", $veri["JPY"]['Satış']);
  define("JPYDEGİSİM", $veri["JPY"]['Değişim']);
  
  
  define("KWDALİS", $veri["KWD"]['Alış']);
  define("KWDSATİS", $veri["KWD"]['Satış']);
  define("KWDDEGİSİM", $veri["KWD"]['Değişim']);
  
  
  define("ZARALİS", $veri["ZAR"]['Alış']);
  define("ZARSATİS", $veri["ZAR"]['Satış']);
  define("ZARDEGİSİM", $veri["ZAR"]['Değişim']);
  
  
  define("BHDALİS", $veri["BHD"]['Alış']);
  define("BHDSATİS", $veri["BHD"]['Satış']);
  define("BHDDEGİSİM", $veri["BHD"]['Değişim']);
  
  
  define("LYDALİS", $veri["LYD"]['Alış']);
  define("LYDSATİS", $veri["LYD"]['Satış']);
  define("LYDDEGİSİM", $veri["LYD"]['Değişim']);  
  
  
  define("SARALİS", $veri["SAR"]['Alış']);
  define("SARSATİS", $veri["SAR"]['Satış']);
  define("SARDEGİSİM", $veri["SAR"]['Değişim']);
  
  
  define("IQDALİS", $veri["IQD"]['Alış']);
  define("IQDSATİS", $veri["IQD"]['Satış']);
  define("IQDDEGİSİM", $veri["IQD"]['Değişim']);
  
  
  define("IRRALİS", $veri["IRR"]['Alış']);
  define("IRRSATİS", $veri["IRR"]['Satış']);
  define("IRRDEGİSİM", $veri["IRR"]['Değişim']);
  
  
  define("INRALİS", $veri["INR"]['Alış']);
  define("INRSATİS", $veri["INR"]['Satış']);
  define("INRDEGİSİM", $veri["INR"]['Değişim']);
  
  
  define("MXNALİS", $veri["MXN"]['Alış']);
  define("MXNSATİS", $veri["MXN"]['Satış']);
  define("MXNDEGİSİM", $veri["MXN"]['Değişim']);
  
  
  define("AZNALİS", $veri["AZN"]['Alış']);
  define("AZNSATİS", $veri["AZN"]['Satış']);
  define("AZNDEGİSİM", $veri["AZN"]['Değişim']);
  
  
  
  define("HUFALİS",$veri["HUF"]['Alış']);
  define("HUFSATİS",$veri["HUF"]['Satış']);
  define("HUFDEGİSİM",$veri["HUF"]['Değişim']);
  
  
  define("NZDALİS",$veri["NZD"]['Alış']);
  define("NZDSATİS",$veri["NZD"]['Satış']);
  define("NZDDEGİSİM",$veri["NZD"]['Değişim']);
  
  
  define("BRLALİS",$veri["BRL"]['Alış']);
  define("BRLSATİS",$veri["BRL"]['Satış']);
  define("BRLDEGİSİM",$veri["BRL"]['Değişim']);
  
  
  define("IDRALİS",$veri["IDR"]['Alış']);
  define("IDRSATİS",$veri["IDR"]['Satış']);
  define("IDRDEGİSİM",$veri["IDR"]['Değişim']);
  
  
  define("CZKALİS",$veri["CZK"]['Alış']);
  define("CZKSATİS",$veri["CZK"]['Satış']);
  define("CZKDEGİSİM",$veri["CZK"]['Değişim']);
  
  
  define("PLNALİS",$veri["PLN"]['Alış']);
  define("PLNSATİS",$veri["PLN"]['Satış']);
  define("PLNDEGİSİM",$veri["PLN"]['Değişim']);
  
  
  define("RONALİS",$veri["RON"]['Alış']);
  define("RONSATİS",$veri["RON"]['Satış']);
  define("RONDEGİSİM",$veri["RON"]['Değişim']);
  
  define("CNYALİS",$veri["CNY"]['Alış']);
  define("CNYSATİS",$veri["CNY"]['Satış']);
  define("CNYDEGİSİM",$veri["CNY"]['Değişim']);
  
  
  define("ARSALİS",$veri["ARS"]['Alış']);
  define("ARSSATİS",$veri["ARS"]['Satış']);
  define("ARSDEGİSİM",$veri["ARS"]['Değişim']);
  
  
  define("ALLALİS",$veri["ALL"]['Alış']);
  define("ALLSATİS",$veri["ALL"]['Satış']);
  define("ALLDEGİSİM",$veri["ALL"]['Değişim']);
  
  
  define("BAMALİS",$veri["BAM"]['Alış']);
  define("BAMSATİS",$veri["BAM"]['Satış']);
  define("BAMDEGİSİM",$veri["BAM"]['Değişim']);
  
  
  define("CLPALİS",$veri["CLP"]['Alış']);
  define("CLPSATİS",$veri["CLP"]['Satış']);
  define("CLPDEGİSİM",$veri["CLP"]['Değişim']);
  
  
  define("COPALİS",$veri["COP"]['Alış']);
  define("COPSATİS",$veri["COP"]['Satış']);
  define("COPDEGİSİM",$veri["COP"]['Değişim']);
  
  
  define("CRCALİS",$veri["CRC"]['Alış']);
  define("CRCSATİS",$veri["CRC"]['Satış']);
  define("CRCDEGİSİM",$veri["CRC"]['Değişim']);
  
  
  define("DZDALİS",$veri["DZD"]['Alış']);
  define("DZDSATİS",$veri["DZD"]['Satış']);
  define("DZDDEGİSİM",$veri["DZD"]['Değişim']);
  
  
  define("EGPALİS",$veri["EGP"]['Alış']);
  define("EGPSATİS",$veri["EGP"]['Satış']);
  define("EGPDEGİSİM",$veri["EGP"]['Değişim']);
  
  
  define("HKDALİS",$veri["HKD"]['Alış']);
  define("HKDSATİS",$veri["HKD"]['Satış']);
  define("HKDDEGİSİM",$veri["HKD"]['Değişim']);
  
  
  define("ISKALİS",$veri["ISK"]['Alış']);
  define("ISKSATİS",$veri["ISK"]['Satış']);
  define("ISKDEGİSİM",$veri["ISK"]['Değişim']);
  
  
  define("HRKALİS",$veri["HRK"]['Alış']);
  define("HRKSATİS",$veri["HRK"]['Satış']);
  define("HRKDEGİSİM",$veri["HRK"]['Değişim']);
  
  
  define("JODALİS",$veri["JOD"]['Alış']);
  define("JODSATİS",$veri["JOD"]['Satış']);
  define("JODDEGİSİM",$veri["JOD"]['Değişim']);
  
  
  define("KRWALİS",$veri["KRW"]['Alış']);
  define("KRWSATİS",$veri["KRW"]['Satış']);
  define("KRWDEGİSİM",$veri["KRW"]['Değişim']);
  
  
  define("KZTALİS",$veri["KZT"]['Alış']);
  define("KZTSATİS",$veri["KZT"]['Satış']);
  define("KZTDEGİSİM",$veri["KZT"]['Değişim']);
  
  
  define("LBPALİS",$veri["LBP"]['Alış']);
  define("LBPATİS",$veri["LBP"]['Satış']);
  define("LBPDEGİSİM",$veri["LBP"]['Değişim']);
  
  
  define("LKRALİS",$veri["LKR"]['Alış']);
  define("LKRSATİS",$veri["LKR"]['Satış']);
  define("LKRDEGİSİM",$veri["LKR"]['Değişim']);
  
  
  define("MADALİS",$veri["MAD"]['Alış']);
  define("MADSATİS",$veri["MAD"]['Satış']);
  define("MADDEGİSİM",$veri["MAD"]['Değişim']);
  
  
  define("MDLALİS",$veri["MDL"]['Alış']);
  define("MDLATİS",$veri["MDL"]['Satış']);
  define("MDLDEGİSİM",$veri["MDL"]['Değişim']);
  
  
  define("MKDALİS",$veri["MKD"]['Alış']);
  define("MKDSATİS",$veri["MKD"]['Satış']);
  define("MKDDEGİSİM",$veri["MKD"]['Değişim']);
  
  
  define("MYRALİS",$veri["MYR"]['Alış']);
  define("MYRSATİS",$veri["MYR"]['Satış']);
  define("MYRDEGİSİM",$veri["MYR"]['Değişim']);
  
  
  define("OMRALİS",$veri["OMR"]['Alış']);
  define("OMRSATİS",$veri["OMR"]['Satış']);
  define("OMRDEGİSİM",$veri["OMR"]['Değişim']);
  
  
  define("PENALİS",$veri["PEN"]['Alış']);
  define("PENSATİS",$veri["PEN"]['Satış']);
  define("PENDEGİSİM",$veri["PEN"]['Değişim']);
  
  
  define("PHPALİS",$veri["PHP"]['Alış']);
  define("PHPSATİS",$veri["PHP"]['Satış']);
  define("PHPDEGİSİM",$veri["PHP"]['Değişim']);
  
  
  define("PKRALİS",$veri["PKR"]['Alış']);
  define("PKRSATİS",$veri["PKR"]['Satış']);
  define("PKRDEGİSİM",$veri["PKR"]['Değişim']);
  
  
  define("QARALİS",$veri["QAR"]['Alış']);
  define("QARSATİS",$veri["QAR"]['Satış']);
  define("QARDEGİSİM",$veri["QAR"]['Değişim']);
  
  
  define("RSDALİS",$veri["RSD"]['Alış']);
  define("RSDSATİS",$veri["RSD"]['Satış']);
  define("RSDDEGİSİM",$veri["RSD"]['Değişim']);
  
  define("SGDALİS",$veri["SGD"]['Alış']);
  define("SGDATİS",$veri["SGD"]['Satış']);
  define("SGDDEGİSİM",$veri["SGD"]['Değişim']);
  
  
  define("SYPALİS",$veri["SYP"]['Alış']);
  define("SYPSATİS",$veri["SYP"]['Satış']);
  define("SYPDEGİSİM",$veri["SYP"]['Değişim']);
  
  
  define("THBALİS",$veri["THB"]['Alış']);
  define("THBSATİS",$veri["THB"]['Satış']);
  define("THBDEGİSİM",$veri["THB"]['Değişim']);
  
  
  define("TWDALİS",$veri["TWD"]['Alış']);
  define("TWDSATİS",$veri["TWD"]['Satış']);
  define("TWDDEGİSİM",$veri["TWD"]['Değişim']);
  
  
  define("UAHALİS",$veri["UAH"]['Alış']);
  define("UAHSATİS",$veri["UAH"]['Satış']);
  define("UAHDEGİSİM",$veri["UAH"]['Değişim']);
  
  
  define("UYUALİS",$veri["UYU"]['Alış']);
  define("UYUSATİS",$veri["UYU"]['Satış']);
  define("UYUDEGİSİM",$veri["UYU"]['Değişim']);
  
  
  define("GELALİS",$veri["GEL"]['Alış']);
  define("GELSATİS",$veri["GEL"]['Satış']);
  define("GELDEGİSİM",$veri["GEL"]['Değişim']);
  
  
  define("TNDALİS",$veri["TND"]['Alış']);
  define("TNDSATİS",$veri["TND"]['Satış']);
  define("TNDDEGİSİM",$veri["TND"]['Değişim']);
  
  
  define("BGNALİS",$veri["BGN"]['Alış']);
  define("BGNSATİS",$veri["BGN"]['Satış']);
  define("BGNDEGİSİM",$veri["BGN"]['Değişim']);
  
  // ALTINLAR
  define("ONSALİS",$veri["ons"]['Alış']);
  define("ONSATİS",$veri["ons"]['Satış']);
  define("ONSDEGİSİM",$veri["ons"]['Değişim']);
  
  define("GAALİS",$veri["gram-altin"]['Alış']);
  define("GASATİS",$veri["gram-altin"]['Satış']);
  define("GADEGİSİM",$veri["gram-altin"]['Değişim']);
  
  
  define("GAhALİS",$veri["gram-has-altin"]['Alış']);
  define("GAhSATİS",$veri["gram-has-altin"]['Satış']);
  define("GAhDEGİSİM",$veri["gram-has-altin"]['Değişim']);
  
  
  define("CEYREKALİS",$veri["ceyrek-altin"]['Alış']);
  define("CEYREKSATİS",$veri["ceyrek-altin"]['Satış']);
  define("CEYREKDEGİSİM",$veri["ceyrek-altin"]['Değişim']);
  
  
  define("YARİMALİS",$veri["yarim-altin"]['Alış']);
  define("YARİMSATİS",$veri["yarim-altin"]['Satış']);
  define("YARİMDEGİSİM",$veri["yarim-altin"]['Değişim']);
  
  
  define("TAMALİS",$veri["tam-altin"]['Alış']);
  define("TAMSATİS",$veri["tam-altin"]['Satış']);
  define("TAMDEGİSİM",$veri["tam-altin"]['Değişim']);
  
  
  define("CUMALİS",$veri["cumhuriyet-altini"]['Alış']);
  define("CUMSATİS",$veri["cumhuriyet-altini"]['Satış']);
  define("CUMDEGİSİM",$veri["cumhuriyet-altini"]['Değişim']);
  
  
  define("ATAALİS",$veri["ata-altin"]['Alış']);
  define("ATASATİS",$veri["ata-altin"]['Satış']);
  define("ATADEGİSİM",$veri["ata-altin"]['Değişim']);
  
  define("I14ALİS",$veri["14-ayar-altin"]['Alış']);
  define("I14SATİS",$veri["14-ayar-altin"]['Satış']);
  define("I14DEGİSİM",$veri["14-ayar-altin"]['Değişim']);
  
  
  define("I18ALİS",$veri["18-ayar-altin"]['Alış']);
  define("I18SATİS",$veri["18-ayar-altin"]['Satış']);
  define("I18DEGİSİM",$veri["18-ayar-altin"]['Değişim']);
  
  
  define("I22ALİS",$veri["22-ayar-bilezik"]['Alış']);
  define("I22SATİS",$veri["22-ayar-bilezik"]['Satış']);
  define("I22DEGİSİM",$veri["22-ayar-bilezik"]['Değişim']);
  
  define("I25ALİS",$veri["ikibucuk-altin"]['Alış']);
  define("I25SATİS",$veri["ikibucuk-altin"]['Satış']);
  define("I25DEGİSİM",$veri["ikibucuk-altin"]['Değişim']);
  
  
  define("BESLİALİS",$veri["besli-altin"]['Alış']);
  define("BESLİSATİS",$veri["besli-altin"]['Satış']);
  define("BESLİDEGİSİM",$veri["besli-altin"]['Değişim']);
  
  
  define("GREMSEALİS",$veri["gremse-altin"]['Alış']);
  define("GREMSESATİS",$veri["gremse-altin"]['Satış']);
  define("GREMSEDEGİSİM",$veri["gremse-altin"]['Değişim']);
  
  
  define("RESATALİS",$veri["resat-altin"]['Alış']);
  define("RESATSATİS",$veri["resat-altin"]['Satış']);
  define("RESATDEGİSİM",$veri["resat-altin"]['Değişim']);
  
  
  define("HAMİTALİS",$veri["hamit-altin"]['Alış']);
  define("HAMİTSATİS",$veri["hamit-altin"]['Satış']);
  define("HAMİTDEGİSİM",$veri["hamit-altin"]['Değişim']);
  
  
  define("GUALİS",$veri["gumus"]['Alış']);
  define("GUSATİS",$veri["gumus"]['Satış']);
  define("GUDEGİSİM",$veri["gumus"]['Değişim']);
  // ALTINLAR
  // sayfalar
  define("INDEX", "http://localhost/d%c3%b6viz/");
  define("KURLAR", "http://localhost/d%c3%b6viz/kurlar.php");
  define("ALTIN", "http://localhost/d%C3%B6viz/altin.php");
  define("DOLAR", "http://localhost/d%C3%B6viz/dolar.php");
  define("EURO", "http://localhost/d%C3%B6viz/euro.php");
  define("CEYREK", "http://localhost/d%C3%B6viz/ceyrek.php");
  // sayfalar
  // resimler
  define("RESIM_YOLU", "img/usd.png");
  
  // resimler
  
?> 