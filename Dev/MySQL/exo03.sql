//ex04
SELECT `productName`,`quantityInStock`,`productCode`, `productScale`
FROM `products`
WHERE `productScale` = '1:10' OR `productScale` = '1:18'
ORDER BY `quantityInStock` DESC

//exo05
SELECT `productName`, `productVendor`, `MSRP`
FROM `products`
WHERE `MSRP` > 132
ORDER BY `productName`

//exo06
SELECT `productName`, `productCode`, `buyPrice`
FROM `products`
WHERE `buyPrice` BETWEEN 60 AND 90
ORDER BY `buyPrice`

//exo07
SELECT `productName`,`productVendor`,`quantityInStock`,
`MSRP` - `buyPrice` AS MARGIN
FROM `products`
WHERE `productLine` = 'Motorcycles'
ORDER BY MARGIN DESC

//ex08
SELECT `orderNumber`,`orderDate`,`shippedDate`, (`requiredDate` - `shippedDate`) AS DELAY, `status`
FROM `orders`
WHERE `requiredDate` - `shippedDate` > 10 AND `status` IN ('In process', 'shipped')
ORDER BY DELAY DESC, `orderDate`

//ex09
SELECT `productName`, (`quantityInStock` * `MSRP`) AS StockretailPrice, SUBSTR(`productName`, 1, 4) AS `Year`
FROM `products`
WHERE `productName` LIKE '196%'
ORDER BY StockretailPrice

//ex10
SELECT `productVendor`, AVG(`buyPrice`) AS PRIXMOYEN
FROM `products`
GROUP BY `productVendor`
ORDER BY PRIXMOYEN DESC

//ex11
SELECT  `productLine`, COUNT(`productName`) AS NBPRODUITS
FROM `products`
GROUP BY `productLine`
ORDER BY NBPRODUITS

//ex12
SELECT `productLine`, SUM(`quantityInStock`) AS SOMMESTOCK, SUM(`quantityInStock` * `MSRP`) AS STOCKVALUE
FROM `products`
WHERE `MSRP` > 100
GROUP BY `productLine`
ORDER BY STOCKVALUE

//ex13
SELECT  `productVendor`, MAX(`quantityInStock`)
FROM `products`
GROUP BY `productVendor`

//ex14
SELECT `productLine`, MIN(`buyPrice`)
FROM `products`
WHERE `productLine` = 'Planes'

//ex15
SELECT `customerNumber`, SUM(`amount`) AS TOTALAMOUNT
FROM `payments`
WHERE `paymentDate` LIKE '2004%'
/*WHERE `paymentDate` BETWEEN "2004-01-01" AND "2004-12-31"*/
GROUP BY `customerNumber`
HAVING TOTALAMOUNT > 20000
ORDER BY `TOTALAMOUNT`  DESC

//ex16
SELECT `firstName`,`lastName`, `jobTitle`, `city`, `addressLine1`
FROM `employees`
INNER JOIN `offices`
ON `employees`.`officeCode` = `offices`.`officeCode`

//ex17
SELECT `customerName`, `contactFirstName`, `contactLastName`, `country`, `firstname`, `lastname`
FROM `customers`
INNER JOIN `employees`
ON `customers`.`salesRepEmployeeNumber` = `employees`.`employeeNumber`
WHERE `country` IN ('France', 'USA')
ORDER BY `contactFirstName`, `contactLastName`

//ex18
SELECT `orderLineNumber`, `orderNumber`, `products`.`productCode`, `productLine`, `productName`, (`buyPrice` - `priceEach`) AS REMISE
FROM `orderdetails`
INNER JOIN `products`
ON `orderdetails`.`productCode` = `products`.`productCode`
ORDER BY `orderLineNumber`, REMISE DESC
