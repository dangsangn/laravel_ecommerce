<?php

namespace App\Enums;

enum PermissionsEnum: string
{
  case ApproveVenders = 'approve_venders';
  case SellProducts = 'sell_products';
  case BuyProducts = 'buy_products';
}
