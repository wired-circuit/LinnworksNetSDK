<?php
class InventoryMethods 
{ public static function CreateInventoryItemPrices($inventoryItemPrices,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/CreateInventoryItemPrices", "inventoryItemPrices=" . json_encode($inventoryItemPrices) . "", $ApiToken, $ApiServer); 
}

public static function UpdateInventoryItemPrices($inventoryItemPrices,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryItemPrices", "inventoryItemPrices=" . json_encode($inventoryItemPrices) . "", $ApiToken, $ApiServer); 
}

public static function DeleteInventoryItemPrices($inventoryItemPriceIds,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteInventoryItemPrices", "inventoryItemPriceIds=" . json_encode($inventoryItemPriceIds) . "", $ApiToken, $ApiServer); 
}

public static function GetInventoryItemDescriptions($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemDescriptions", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
}

public static function CreateInventoryItemDescriptions($inventoryItemDescriptions,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/CreateInventoryItemDescriptions", "inventoryItemDescriptions=" . json_encode($inventoryItemDescriptions) . "", $ApiToken, $ApiServer); 
}

public static function UpdateInventoryItemDescriptions($inventoryItemDescriptions,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryItemDescriptions", "inventoryItemDescriptions=" . json_encode($inventoryItemDescriptions) . "", $ApiToken, $ApiServer); 
}

public static function DeleteInventoryItemDescriptions($inventoryItemDescriptionIds,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteInventoryItemDescriptions", "inventoryItemDescriptionIds=" . json_encode($inventoryItemDescriptionIds) . "", $ApiToken, $ApiServer); 
}

public static function GetChannels($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetChannels", "", $ApiToken, $ApiServer)); 
}

public static function GetExtendedPropertyNames($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetExtendedPropertyNames", "", $ApiToken, $ApiServer)); 
}

public static function GetExtendedPropertyTypes($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetExtendedPropertyTypes", "", $ApiToken, $ApiServer)); 
}

public static function GetSystemPropertyNames($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetSystemPropertyNames", "", $ApiToken, $ApiServer)); 
}

public static function GetPackageGroups($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetPackageGroups", "", $ApiToken, $ApiServer)); 
}

public static function GetPostalServices($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetPostalServices", "", $ApiToken, $ApiServer)); 
}

public static function GetInventoryItems($view,$stockLocationIds,$startIndex,$itemsCount,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItems", "view=" . json_encode($view) . "&stockLocationIds=" . json_encode($stockLocationIds) . "&startIndex=" . $startIndex . "&itemsCount=" . $itemsCount . "", $ApiToken, $ApiServer)); 
}

public static function UpdateInventoryItemField($inventoryItemId,$fieldName,$fieldValue,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryItemField", "inventoryItemId=" . $inventoryItemId . "&fieldName=" . $fieldName . "&fieldValue=" . $fieldValue . "", $ApiToken, $ApiServer); 
}

public static function UpdateInventoryItemStockField($inventoryItemId,$fieldName,$fieldValue,$locationId,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryItemStockField", "inventoryItemId=" . $inventoryItemId . "&fieldName=" . $fieldName . "&fieldValue=" . $fieldValue . "&locationId=" . $locationId . "", $ApiToken, $ApiServer); 
}

public static function UpdateInventoryItemLocationField($inventoryItemId,$fieldName,$fieldValue,$locationId,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryItemLocationField", "inventoryItemId=" . $inventoryItemId . "&fieldName=" . $fieldName . "&fieldValue=" . $fieldValue . "&locationId=" . $locationId . "", $ApiToken, $ApiServer); 
}

public static function GetInventoryItemById($id,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemById", "id=" . $id . "", $ApiToken, $ApiServer)); 
}

public static function GetInventoryViews($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryViews", "", $ApiToken, $ApiServer)); 
}

public static function GetInventoryFilterTypes($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryFilterTypes", "", $ApiToken, $ApiServer)); 
}

public static function GetInventoryColumnTypes($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryColumnTypes", "", $ApiToken, $ApiServer)); 
}

public static function GetNewInventoryView($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetNewInventoryView", "", $ApiToken, $ApiServer)); 
}

public static function UpdateInventoryViews($views,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryViews", "views=" . json_encode($views) . "", $ApiToken, $ApiServer); 
}

public static function AddInventoryItem($inventoryItem,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/AddInventoryItem", "inventoryItem=" . json_encode($inventoryItem) . "", $ApiToken, $ApiServer); 
}

public static function DuplicateInventoryItem($inventoryItem,$sourceItemId,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DuplicateInventoryItem", "inventoryItem=" . json_encode($inventoryItem) . "&sourceItemId=" . $sourceItemId . "", $ApiToken, $ApiServer); 
}

public static function GetNewItemNumber($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetNewItemNumber", "", $ApiToken, $ApiServer)); 
}

public static function UpdateInventoryItem($inventoryItem,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryItem", "inventoryItem=" . json_encode($inventoryItem) . "", $ApiToken, $ApiServer); 
}

public static function DeleteInventoryItems($inventoryItemIds,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteInventoryItems", "inventoryItemIds=" . json_encode($inventoryItemIds) . "", $ApiToken, $ApiServer); 
}

public static function AdjustTemplatesInstant($inventoryItemIds,$source,$subSource,$adjustmentOptions,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/AdjustTemplatesInstant", "inventoryItemIds=" . json_encode($inventoryItemIds) . "&source=" . $source . "&subSource=" . $subSource . "&adjustmentOptions=" . json_encode($adjustmentOptions) . "", $ApiToken, $ApiServer); 
}

public static function GetInventoryItemChannelSKUs($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemChannelSKUs", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
}

public static function CreateInventoryItemChannelSKUs($inventoryItemChannelSKUs,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/CreateInventoryItemChannelSKUs", "inventoryItemChannelSKUs=" . json_encode($inventoryItemChannelSKUs) . "", $ApiToken, $ApiServer); 
}

public static function DeleteInventoryItemChannelSKUs($inventoryItemChannelSKUIds,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteInventoryItemChannelSKUs", "inventoryItemChannelSKUIds=" . json_encode($inventoryItemChannelSKUIds) . "", $ApiToken, $ApiServer); 
}

public static function UnlinkChannelListing($channelRefId,$source,$subSource,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UnlinkChannelListing", "channelRefId=" . $channelRefId . "&source=" . $source . "&subSource=" . $subSource . "", $ApiToken, $ApiServer); 
}

public static function GetInventoryItemAuditTrail($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemAuditTrail", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
}

public static function GetInventoryItemImages($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemImages", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
}

public static function GetInventoryItemImagesForTemplates($inventoryItemIds,$source,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemImagesForTemplates", "inventoryItemIds=" . json_encode($inventoryItemIds) . "&source=" . $source . "", $ApiToken, $ApiServer)); 
}

public static function SetInventoryItemImageAsMain($inventoryItemId,$mainImageId,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/SetInventoryItemImageAsMain", "inventoryItemId=" . $inventoryItemId . "&mainImageId=" . $mainImageId . "", $ApiToken, $ApiServer); 
}

public static function UploadImagesToInventoryItem($inventoryItemId,$imageIds,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/UploadImagesToInventoryItem", "inventoryItemId=" . $inventoryItemId . "&imageIds=" . json_encode($imageIds) . "", $ApiToken, $ApiServer)); 
}

public static function DeleteImagesFromInventoryItem($imageURL,$inventoryItemId,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteImagesFromInventoryItem", "imageURL=" . $imageURL . "&inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer); 
}

public static function GetCategories($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetCategories", "", $ApiToken, $ApiServer)); 
}

public static function CreateCategory($categoryName,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/CreateCategory", "categoryName=" . $categoryName . "", $ApiToken, $ApiServer)); 
}

public static function UpdateCategory($category,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateCategory", "category=" . json_encode($category) . "", $ApiToken, $ApiServer); 
}

public static function DeleteCategoryById($categoryId,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteCategoryById", "categoryId=" . $categoryId . "", $ApiToken, $ApiServer); 
}

public static function GetCountryCodes($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetCountryCodes", "", $ApiToken, $ApiServer)); 
}

public static function GetCountries($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetCountries", "", $ApiToken, $ApiServer)); 
}

public static function CreateCountries($countries,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/CreateCountries", "countries=" . json_encode($countries) . "", $ApiToken, $ApiServer); 
}

public static function UpdateCountries($countries,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateCountries", "countries=" . json_encode($countries) . "", $ApiToken, $ApiServer); 
}

public static function DeleteCountries($countries,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteCountries", "countries=" . json_encode($countries) . "", $ApiToken, $ApiServer); 
}

public static function GetStockLocations($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetStockLocations", "", $ApiToken, $ApiServer)); 
}

public static function GetInventoryItemLocations($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemLocations", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
}

public static function AddItemLocations($itemLocations,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/AddItemLocations", "itemLocations=" . json_encode($itemLocations) . "", $ApiToken, $ApiServer); 
}

public static function UpdateItemLocations($itemLocations,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateItemLocations", "itemLocations=" . json_encode($itemLocations) . "", $ApiToken, $ApiServer); 
}

public static function DeleteItemLocations($inventoryItemId,$itemLocations,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteItemLocations", "inventoryItemId=" . $inventoryItemId . "&itemLocations=" . json_encode($itemLocations) . "", $ApiToken, $ApiServer); 
}

public static function GetInventoryItemCompositions($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemCompositions", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
}

public static function CreateInventoryItemCompositions($inventoryItemCompositions,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/CreateInventoryItemCompositions", "inventoryItemCompositions=" . json_encode($inventoryItemCompositions) . "", $ApiToken, $ApiServer); 
}

public static function UpdateInventoryItemCompositions($inventoryItemCompositions,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryItemCompositions", "inventoryItemCompositions=" . json_encode($inventoryItemCompositions) . "", $ApiToken, $ApiServer); 
}

public static function DeleteInventoryItemCompositions($stockItemId,$inventoryItemCompositionIds,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteInventoryItemCompositions", "stockItemId=" . $stockItemId . "&inventoryItemCompositionIds=" . json_encode($inventoryItemCompositionIds) . "", $ApiToken, $ApiServer); 
}

public static function GetInventoryItemExtendedProperties($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemExtendedProperties", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
}

public static function CreateInventoryItemExtendedProperties($inventoryItemExtendedProperties,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/CreateInventoryItemExtendedProperties", "inventoryItemExtendedProperties=" . json_encode($inventoryItemExtendedProperties) . "", $ApiToken, $ApiServer); 
}

public static function UpdateInventoryItemExtendedProperties($inventoryItemExtendedProperties,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryItemExtendedProperties", "inventoryItemExtendedProperties=" . json_encode($inventoryItemExtendedProperties) . "", $ApiToken, $ApiServer); 
}

public static function DeleteInventoryItemExtendedProperties($inventoryItemId,$inventoryItemExtendedPropertyIds,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteInventoryItemExtendedProperties", "inventoryItemId=" . $inventoryItemId . "&inventoryItemExtendedPropertyIds=" . json_encode($inventoryItemExtendedPropertyIds) . "", $ApiToken, $ApiServer); 
}

public static function GetInventoryItemTitles($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemTitles", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
}

public static function CreateInventoryItemTitles($inventoryItemTitles,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/CreateInventoryItemTitles", "inventoryItemTitles=" . json_encode($inventoryItemTitles) . "", $ApiToken, $ApiServer); 
}

public static function UpdateInventoryItemTitles($inventoryItemTitles,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateInventoryItemTitles", "inventoryItemTitles=" . json_encode($inventoryItemTitles) . "", $ApiToken, $ApiServer); 
}

public static function DeleteInventoryItemTitles($inventoryItemTitleIds,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteInventoryItemTitles", "inventoryItemTitleIds=" . json_encode($inventoryItemTitleIds) . "", $ApiToken, $ApiServer); 
}

public static function GetSupplierList($ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetSupplierList", "", $ApiToken, $ApiServer)); 
}

public static function GetStockSupplierStat($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetStockSupplierStat", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
}

public static function CreateStockSupplierStat($itemSuppliers,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/CreateStockSupplierStat", "itemSuppliers=" . json_encode($itemSuppliers) . "", $ApiToken, $ApiServer); 
}

public static function UpdateStockSupplierStat($itemSuppliers,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/UpdateStockSupplierStat", "itemSuppliers=" . json_encode($itemSuppliers) . "", $ApiToken, $ApiServer); 
}

public static function DeleteStockSupplierStat($stockItemId,$itemSupplierIds,$ApiToken, $ApiServer)
{
 Factory::GetResponse("Inventory/DeleteStockSupplierStat", "stockItemId=" . $stockItemId . "&itemSupplierIds=" . json_encode($itemSupplierIds) . "", $ApiToken, $ApiServer); 
}

public static function GetInventoryItemPrices($inventoryItemId,$ApiToken, $ApiServer)
{
 return json_decode(Factory::GetResponse("Inventory/GetInventoryItemPrices", "inventoryItemId=" . $inventoryItemId . "", $ApiToken, $ApiServer)); 
} 
}
?>