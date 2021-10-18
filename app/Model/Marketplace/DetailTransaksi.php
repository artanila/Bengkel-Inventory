<?php

namespace App\Model\Marketplace;

use App\Model\Inventory\DetailSparepart\DetailSparepart;
use App\Model\Inventory\Sparepart;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
     protected $table = 'tb_marketplace_detail_transaksi';

    protected $primaryKey = 'id_detail_transaksi';

    protected $fillable = [
        'id_detail_transaksi','id_transaksi_online', 'id_detail_sparepart', 'jumlah_produk', 'review'
        , 'code_detail_transaksi', 'status', 'rating'
    ];

    public function DetailSparepart(){
        return $this->hasOne(DetailSparepart::class, 'id_detail_sparepart', 'id_detail_sparepart');
    }
}
