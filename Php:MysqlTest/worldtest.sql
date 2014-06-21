select count(Country.Population * CountryLanguage.Percentage) as total from CountryLanguage left join Country on Country.Code = CountryLanguage.CountryCode group by CountryLanguage.Language