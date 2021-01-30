<?php namespace App\Models;

    use CodeIgniter\Model;
    class InfoUF_model extends Model {

        protected $table      = 'datos_uf';
        protected $primaryKey = 'id';
    
        protected $returnType     = 'array';
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['fecha', 'valor'];
    
        protected $useTimestamps = false;
     
        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
    }
    
?>