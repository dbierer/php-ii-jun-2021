<?php
namespace Test\Entity;

/*
 * 
 * ISO	
 * ISO3	
 * ISO-Numeric	
 * fips	
 * Country	
 * Capital	
 * Area(in sq km)	
 * Population	
 * Continent	
 * tld	
 * CurrencyCode	
 * CurrencyName	
 * Phone	
 * PostalCode 
 * Format	
 */
class Geoname
{
    public function __construct(
		public string $ISO	= '',
		public string $ISO3	= '',
		public string $ISO_Numeric	= '',
		public string $fips	= '',
		public string $Country	= '',
		public string $Capital	= '',
		public string $Area	= '',
		public string $Population	= '',
		public string $Continent	= '',
		public string $tld	= '',
		public string $CurrencyCode	= '',
		public string $CurrencyName	= '',
		public string $Phone	= '',
		public string $PostalCode = '',
		public string $Format	= '',	) 
    {}
    public function getArrayCopy()
    {
		return get_object_vars($this);
	}
}
