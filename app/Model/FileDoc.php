<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FileDoc extends Model
{
    protected $primaryKey = "iID";
    protected $fillable = ["iID", "iTableID", "iRecordID", "oFile", "iTypeFile", "iFileSize", "sFileName", "sFileExt", "dateCreation"];
}
