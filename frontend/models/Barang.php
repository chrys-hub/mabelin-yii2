<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string $nama_barang
 * @property int $harga_barang
 * @property string $kategori
 * @property string $deskripsi
 * @property string $gambar
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'harga_barang', 'kategori', 'deskripsi', 'gambar'], 'required'],
            [['harga_barang'], 'integer'],
            [['nama_barang', 'kategori', 'deskripsi', 'gambar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'harga_barang' => 'Harga Barang',
            'kategori' => 'Kategori',
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
        ];
    }
}
