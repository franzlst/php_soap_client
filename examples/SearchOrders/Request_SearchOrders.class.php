<?php


class Request_SearchOrders 
{

	public function getRequest()
	{
		$oPlentySoapRequest_SearchOrders	=	new PlentySoapRequest_SearchOrders();
			
		// search params
		$oPlentySoapRequest_SearchOrders->GetOrderCustomerAddress		=	false;
		
		$oPlentySoapRequest_SearchOrders->GetOrderDeliveryAddress		=	false;
		
		$oPlentySoapRequest_SearchOrders->GetOrderInfo					=	false;
		
		$oPlentySoapRequest_SearchOrders->GetParcelService				=	false;
		
		$oPlentySoapRequest_SearchOrders->GetSalesOrderProperties		=	false;
		
		$oPlentySoapRequest_SearchOrders->CustomerCountryID				=	null;
		
		$oPlentySoapRequest_SearchOrders->ExternalOrderID				=	null;
		
		$oPlentySoapRequest_SearchOrders->InvoiceNumber					=	null;
		
		$oPlentySoapRequest_SearchOrders->LastUpdateFrom				=	0;
		
		$oPlentySoapRequest_SearchOrders->LastUpdateTill				=	null;
		
		$oPlentySoapRequest_SearchOrders->MultishopID					=	0;
		
		$oPlentySoapRequest_SearchOrders->OrderCompletedFrom			=	null;
		
		$oPlentySoapRequest_SearchOrders->OrderCompletedTill			=	null;
		
		$oPlentySoapRequest_SearchOrders->OrderCreatedFrom				=	null;
		
		$oPlentySoapRequest_SearchOrders->OrderCreatedTill				=	null;
		
		$oPlentySoapRequest_SearchOrders->OrderID						=	null;
		
		$oPlentySoapRequest_SearchOrders->OrderPaidFrom					=	null;
		
		$oPlentySoapRequest_SearchOrders->OrderPaidTill					=	null;
		
		$oPlentySoapRequest_SearchOrders->ReferrerID					=	null;
		
		$oPlentySoapRequest_SearchOrders->OrderStatus					=	3.0;
		
		$oPlentySoapRequest_SearchOrders->Page							=	0;
		
		return $oPlentySoapRequest_SearchOrders;
	}
	
}

?>