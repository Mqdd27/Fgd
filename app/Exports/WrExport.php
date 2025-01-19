<?php

namespace App\Exports;

use App\Models\wr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WrExport implements FromCollection, WithHeadings
{
    /**
     * Mengembalikan koleksi data untuk diekspor.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Mengambil data dari model Barang
        return wr::select("dstrc_ori", "creation_date", "authsd_date", "wo_desc", "acuan_plan_service", "componen_desc", "egi", "egi_eng", "equip_no", "plant_process", "plant_activity", "wr_no", "wr_item",  "stock_code", "price_code", "item_name", "class", "current_class", "mnemonic_current", "pn_current", "pn_global", "wh", "uoi", "qty_req", "notes", "status")->get();
    }

    /**
     * Mendefinisikan header untuk file Excel.
     *
     * @return array
     */
    public function headings(): array
    {
        return ["DSTRC_ORI", "CREATION_DATE", "AUTHSD_DATE", "WO_DESC", "ACUAN_PLAN_SERVICE", "COMPONEN_DESC", "EGI", "EGI_ENG", "EQUIP_NO", "PLANT_PROCESS", "PLANT_ACTIVITY", "WR_NO", "WR_ITEM",  "STOCK_CODE", "PRICE_CODE", "ITEM_NAME", "CLASS", "CURRENT_CLASS", "MNEMONIC_CURRENT", "PN_CURRENT", "PN_GLOBAL", "WH", "UOI", "QTY_REQ", "NOTES", "STATUS"];
    }
}
