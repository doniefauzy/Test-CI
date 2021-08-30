<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    // protected $table = 'user';
    // protected $allowedFields = ['nip', 'password'];
    // function get_pegawai_list($sort_by, $sort_order)
    // {
    //     $sort_order = ($sort_order == 'DESC') ? 'DESC' : 'ASC';

    //     $sort_columns = array('nama', 'jabatan');

    //     $sort_by = (in_array($sort_by, $sort_columns)) ? '`' . $sort_by . '`' : '`name`';

    //     $sql = 'SELECT `id`, `nama`, `jabatan` FROM ' . $this->table .
    //         ' ORDER BY ' . $sort_by . ' ' . $sort_order;

    //     $query = $this->db->query($sql);

    //     return $query->getResult();
    // }
}
