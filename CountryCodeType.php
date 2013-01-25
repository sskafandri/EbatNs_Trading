<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines the 2-letter country code set.<br><br>Use the GeteBayDetails call to see 
 * the list of currently supported codes,and the English names associated with each 
 * code (e.g., KY="Cayman 
 * Islands"):http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html<br><br>Most 
 * of the codes that eBay uses conform to the ISO 3166 standard, but some of 
 * thecodes in the ISO 3166 standard are not used by eBay. Plus, there are some 
 * non-ISOcodes in the eBay list. (Additional codes appear at the end of this code 
 * list andare noted as non-ISO.) 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CountryCodeType.html
 *
 * @property string AF
 * @property string AL
 * @property string DZ
 * @property string AS
 * @property string AD
 * @property string AO
 * @property string AI
 * @property string AQ
 * @property string AG
 * @property string AR
 * @property string AM
 * @property string AW
 * @property string AU
 * @property string AT
 * @property string AZ
 * @property string BS
 * @property string BH
 * @property string BD
 * @property string BB
 * @property string BY
 * @property string BE
 * @property string BZ
 * @property string BJ
 * @property string BM
 * @property string BT
 * @property string BO
 * @property string BA
 * @property string BW
 * @property string BV
 * @property string BR
 * @property string IO
 * @property string BN
 * @property string BG
 * @property string BF
 * @property string BI
 * @property string KH
 * @property string CM
 * @property string CA
 * @property string CV
 * @property string KY
 * @property string CF
 * @property string TD
 * @property string CL
 * @property string CN
 * @property string CX
 * @property string CC
 * @property string CO
 * @property string KM
 * @property string CG
 * @property string CD
 * @property string CK
 * @property string CR
 * @property string CI
 * @property string HR
 * @property string CU
 * @property string CY
 * @property string CZ
 * @property string DK
 * @property string DJ
 * @property string DM
 * @property string DO
 * @property string TP
 * @property string EC
 * @property string EG
 * @property string SV
 * @property string GQ
 * @property string ER
 * @property string EE
 * @property string ET
 * @property string FK
 * @property string FO
 * @property string FJ
 * @property string FI
 * @property string FR
 * @property string GF
 * @property string PF
 * @property string TF
 * @property string GA
 * @property string GM
 * @property string GE
 * @property string DE
 * @property string GH
 * @property string GI
 * @property string GR
 * @property string GL
 * @property string GD
 * @property string GP
 * @property string GU
 * @property string GT
 * @property string GN
 * @property string GW
 * @property string GY
 * @property string HT
 * @property string HM
 * @property string VA
 * @property string HN
 * @property string HK
 * @property string HU
 * @property string IS
 * @property string IN
 * @property string ID
 * @property string IR
 * @property string IQ
 * @property string IE
 * @property string IL
 * @property string IT
 * @property string JM
 * @property string JP
 * @property string JO
 * @property string KZ
 * @property string KE
 * @property string KI
 * @property string KP
 * @property string KR
 * @property string KW
 * @property string KG
 * @property string LA
 * @property string LV
 * @property string LB
 * @property string LS
 * @property string LR
 * @property string LY
 * @property string LI
 * @property string LT
 * @property string LU
 * @property string MO
 * @property string MK
 * @property string MG
 * @property string MW
 * @property string MY
 * @property string MV
 * @property string ML
 * @property string MT
 * @property string MH
 * @property string MQ
 * @property string MR
 * @property string MU
 * @property string YT
 * @property string MX
 * @property string FM
 * @property string MD
 * @property string MC
 * @property string MN
 * @property string MS
 * @property string MA
 * @property string MZ
 * @property string MM
 * @property string NA
 * @property string NR
 * @property string NP
 * @property string NL
 * @property string AN
 * @property string NC
 * @property string NZ
 * @property string NI
 * @property string NE
 * @property string NG
 * @property string NU
 * @property string NF
 * @property string MP
 * @property string NO
 * @property string OM
 * @property string PK
 * @property string PW
 * @property string PS
 * @property string PA
 * @property string PG
 * @property string PY
 * @property string PE
 * @property string PH
 * @property string PN
 * @property string PL
 * @property string PT
 * @property string PR
 * @property string QA
 * @property string RE
 * @property string RO
 * @property string RU
 * @property string RW
 * @property string SH
 * @property string KN
 * @property string LC
 * @property string PM
 * @property string VC
 * @property string WS
 * @property string SM
 * @property string ST
 * @property string SA
 * @property string SN
 * @property string SC
 * @property string SL
 * @property string SG
 * @property string SK
 * @property string SI
 * @property string SB
 * @property string SO
 * @property string ZA
 * @property string GS
 * @property string ES
 * @property string LK
 * @property string SD
 * @property string SR
 * @property string SJ
 * @property string SZ
 * @property string SE
 * @property string CH
 * @property string SY
 * @property string TW
 * @property string TJ
 * @property string TZ
 * @property string TH
 * @property string TG
 * @property string TK
 * @property string TO
 * @property string TT
 * @property string TN
 * @property string TR
 * @property string TM
 * @property string TC
 * @property string TV
 * @property string UG
 * @property string UA
 * @property string AE
 * @property string GB
 * @property string US
 * @property string UM
 * @property string UY
 * @property string UZ
 * @property string VU
 * @property string VE
 * @property string VN
 * @property string VG
 * @property string VI
 * @property string WF
 * @property string EH
 * @property string YE
 * @property string YU
 * @property string ZM
 * @property string ZW
 * @property string AA
 * @property string QM
 * @property string QN
 * @property string QO
 * @property string QP
 * @property string JE
 * @property string GG
 * @property string ZZ
 * @property string RS
 * @property string ME
 * @property string CustomCode
 */
class CountryCodeType extends EbatNs_FacetType
{
	const CodeType_AF = 'AF';
	const CodeType_AL = 'AL';
	const CodeType_DZ = 'DZ';
	const CodeType_AS = 'AS';
	const CodeType_AD = 'AD';
	const CodeType_AO = 'AO';
	const CodeType_AI = 'AI';
	const CodeType_AQ = 'AQ';
	const CodeType_AG = 'AG';
	const CodeType_AR = 'AR';
	const CodeType_AM = 'AM';
	const CodeType_AW = 'AW';
	const CodeType_AU = 'AU';
	const CodeType_AT = 'AT';
	const CodeType_AZ = 'AZ';
	const CodeType_BS = 'BS';
	const CodeType_BH = 'BH';
	const CodeType_BD = 'BD';
	const CodeType_BB = 'BB';
	const CodeType_BY = 'BY';
	const CodeType_BE = 'BE';
	const CodeType_BZ = 'BZ';
	const CodeType_BJ = 'BJ';
	const CodeType_BM = 'BM';
	const CodeType_BT = 'BT';
	const CodeType_BO = 'BO';
	const CodeType_BA = 'BA';
	const CodeType_BW = 'BW';
	const CodeType_BV = 'BV';
	const CodeType_BR = 'BR';
	const CodeType_IO = 'IO';
	const CodeType_BN = 'BN';
	const CodeType_BG = 'BG';
	const CodeType_BF = 'BF';
	const CodeType_BI = 'BI';
	const CodeType_KH = 'KH';
	const CodeType_CM = 'CM';
	const CodeType_CA = 'CA';
	const CodeType_CV = 'CV';
	const CodeType_KY = 'KY';
	const CodeType_CF = 'CF';
	const CodeType_TD = 'TD';
	const CodeType_CL = 'CL';
	const CodeType_CN = 'CN';
	const CodeType_CX = 'CX';
	const CodeType_CC = 'CC';
	const CodeType_CO = 'CO';
	const CodeType_KM = 'KM';
	const CodeType_CG = 'CG';
	const CodeType_CD = 'CD';
	const CodeType_CK = 'CK';
	const CodeType_CR = 'CR';
	const CodeType_CI = 'CI';
	const CodeType_HR = 'HR';
	const CodeType_CU = 'CU';
	const CodeType_CY = 'CY';
	const CodeType_CZ = 'CZ';
	const CodeType_DK = 'DK';
	const CodeType_DJ = 'DJ';
	const CodeType_DM = 'DM';
	const CodeType_DO = 'DO';
	const CodeType_TP = 'TP';
	const CodeType_EC = 'EC';
	const CodeType_EG = 'EG';
	const CodeType_SV = 'SV';
	const CodeType_GQ = 'GQ';
	const CodeType_ER = 'ER';
	const CodeType_EE = 'EE';
	const CodeType_ET = 'ET';
	const CodeType_FK = 'FK';
	const CodeType_FO = 'FO';
	const CodeType_FJ = 'FJ';
	const CodeType_FI = 'FI';
	const CodeType_FR = 'FR';
	const CodeType_GF = 'GF';
	const CodeType_PF = 'PF';
	const CodeType_TF = 'TF';
	const CodeType_GA = 'GA';
	const CodeType_GM = 'GM';
	const CodeType_GE = 'GE';
	const CodeType_DE = 'DE';
	const CodeType_GH = 'GH';
	const CodeType_GI = 'GI';
	const CodeType_GR = 'GR';
	const CodeType_GL = 'GL';
	const CodeType_GD = 'GD';
	const CodeType_GP = 'GP';
	const CodeType_GU = 'GU';
	const CodeType_GT = 'GT';
	const CodeType_GN = 'GN';
	const CodeType_GW = 'GW';
	const CodeType_GY = 'GY';
	const CodeType_HT = 'HT';
	const CodeType_HM = 'HM';
	const CodeType_VA = 'VA';
	const CodeType_HN = 'HN';
	const CodeType_HK = 'HK';
	const CodeType_HU = 'HU';
	const CodeType_IS = 'IS';
	const CodeType_IN = 'IN';
	const CodeType_ID = 'ID';
	const CodeType_IR = 'IR';
	const CodeType_IQ = 'IQ';
	const CodeType_IE = 'IE';
	const CodeType_IL = 'IL';
	const CodeType_IT = 'IT';
	const CodeType_JM = 'JM';
	const CodeType_JP = 'JP';
	const CodeType_JO = 'JO';
	const CodeType_KZ = 'KZ';
	const CodeType_KE = 'KE';
	const CodeType_KI = 'KI';
	const CodeType_KP = 'KP';
	const CodeType_KR = 'KR';
	const CodeType_KW = 'KW';
	const CodeType_KG = 'KG';
	const CodeType_LA = 'LA';
	const CodeType_LV = 'LV';
	const CodeType_LB = 'LB';
	const CodeType_LS = 'LS';
	const CodeType_LR = 'LR';
	const CodeType_LY = 'LY';
	const CodeType_LI = 'LI';
	const CodeType_LT = 'LT';
	const CodeType_LU = 'LU';
	const CodeType_MO = 'MO';
	const CodeType_MK = 'MK';
	const CodeType_MG = 'MG';
	const CodeType_MW = 'MW';
	const CodeType_MY = 'MY';
	const CodeType_MV = 'MV';
	const CodeType_ML = 'ML';
	const CodeType_MT = 'MT';
	const CodeType_MH = 'MH';
	const CodeType_MQ = 'MQ';
	const CodeType_MR = 'MR';
	const CodeType_MU = 'MU';
	const CodeType_YT = 'YT';
	const CodeType_MX = 'MX';
	const CodeType_FM = 'FM';
	const CodeType_MD = 'MD';
	const CodeType_MC = 'MC';
	const CodeType_MN = 'MN';
	const CodeType_MS = 'MS';
	const CodeType_MA = 'MA';
	const CodeType_MZ = 'MZ';
	const CodeType_MM = 'MM';
	const CodeType_NA = 'NA';
	const CodeType_NR = 'NR';
	const CodeType_NP = 'NP';
	const CodeType_NL = 'NL';
	const CodeType_AN = 'AN';
	const CodeType_NC = 'NC';
	const CodeType_NZ = 'NZ';
	const CodeType_NI = 'NI';
	const CodeType_NE = 'NE';
	const CodeType_NG = 'NG';
	const CodeType_NU = 'NU';
	const CodeType_NF = 'NF';
	const CodeType_MP = 'MP';
	const CodeType_NO = 'NO';
	const CodeType_OM = 'OM';
	const CodeType_PK = 'PK';
	const CodeType_PW = 'PW';
	const CodeType_PS = 'PS';
	const CodeType_PA = 'PA';
	const CodeType_PG = 'PG';
	const CodeType_PY = 'PY';
	const CodeType_PE = 'PE';
	const CodeType_PH = 'PH';
	const CodeType_PN = 'PN';
	const CodeType_PL = 'PL';
	const CodeType_PT = 'PT';
	const CodeType_PR = 'PR';
	const CodeType_QA = 'QA';
	const CodeType_RE = 'RE';
	const CodeType_RO = 'RO';
	const CodeType_RU = 'RU';
	const CodeType_RW = 'RW';
	const CodeType_SH = 'SH';
	const CodeType_KN = 'KN';
	const CodeType_LC = 'LC';
	const CodeType_PM = 'PM';
	const CodeType_VC = 'VC';
	const CodeType_WS = 'WS';
	const CodeType_SM = 'SM';
	const CodeType_ST = 'ST';
	const CodeType_SA = 'SA';
	const CodeType_SN = 'SN';
	const CodeType_SC = 'SC';
	const CodeType_SL = 'SL';
	const CodeType_SG = 'SG';
	const CodeType_SK = 'SK';
	const CodeType_SI = 'SI';
	const CodeType_SB = 'SB';
	const CodeType_SO = 'SO';
	const CodeType_ZA = 'ZA';
	const CodeType_GS = 'GS';
	const CodeType_ES = 'ES';
	const CodeType_LK = 'LK';
	const CodeType_SD = 'SD';
	const CodeType_SR = 'SR';
	const CodeType_SJ = 'SJ';
	const CodeType_SZ = 'SZ';
	const CodeType_SE = 'SE';
	const CodeType_CH = 'CH';
	const CodeType_SY = 'SY';
	const CodeType_TW = 'TW';
	const CodeType_TJ = 'TJ';
	const CodeType_TZ = 'TZ';
	const CodeType_TH = 'TH';
	const CodeType_TG = 'TG';
	const CodeType_TK = 'TK';
	const CodeType_TO = 'TO';
	const CodeType_TT = 'TT';
	const CodeType_TN = 'TN';
	const CodeType_TR = 'TR';
	const CodeType_TM = 'TM';
	const CodeType_TC = 'TC';
	const CodeType_TV = 'TV';
	const CodeType_UG = 'UG';
	const CodeType_UA = 'UA';
	const CodeType_AE = 'AE';
	const CodeType_GB = 'GB';
	const CodeType_US = 'US';
	const CodeType_UM = 'UM';
	const CodeType_UY = 'UY';
	const CodeType_UZ = 'UZ';
	const CodeType_VU = 'VU';
	const CodeType_VE = 'VE';
	const CodeType_VN = 'VN';
	const CodeType_VG = 'VG';
	const CodeType_VI = 'VI';
	const CodeType_WF = 'WF';
	const CodeType_EH = 'EH';
	const CodeType_YE = 'YE';
	const CodeType_YU = 'YU';
	const CodeType_ZM = 'ZM';
	const CodeType_ZW = 'ZW';
	const CodeType_AA = 'AA';
	const CodeType_QM = 'QM';
	const CodeType_QN = 'QN';
	const CodeType_QO = 'QO';
	const CodeType_QP = 'QP';
	const CodeType_JE = 'JE';
	const CodeType_GG = 'GG';
	const CodeType_ZZ = 'ZZ';
	const CodeType_RS = 'RS';
	const CodeType_ME = 'ME';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CountryCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CountryCodeType = new CountryCodeType();

?>
