<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiers extends Model
{
    use HasFactory;
    protected $table = 'tiers';

    protected $fillable = [
        'nomTier', 'idActeur', 'adresse', 'ville', 'codePostal',
        'idPays', 'numPhone', 'emailTier', 'webSite', 'idUnite',
        'idQualite', 'idEtat', 'merchSenior', 'contactMerchSenior',
        'emailMerchSenior', 'merchJunior', 'contactMerchJunior',
        'emailMerchJunior', 'assistant', 'contactAssistant',
        'emailAssistant', 'idUtilisateur', 'logo', 'dateentree',
        'etat'
    ];

    public function insertTier($data)
    {
        DB::table($this->table)->insert([
            'nomTier' => $data['nomTier'],
            'idActeur' => $data['idActeur'],
            'adresse' => $data['adresse'],
            'ville' => $data['ville'],
            'codePostal' => $data['codePostal'],
            'idPays' => $data['idPays'],
            'numPhone' => $data['numPhone'],
            'emailTier' => $data['emailTier'],
            'webSite' => $data['webSite'],
            'idUnite' => $data['idUnite'],
            'idQualite' => $data['idQualite'],
            'idEtat' => $data['idEtat'],
            'merchSenior' => $data['merchSenior'],
            'contactMerchSenior' => $data['contactMerchSenior'],
            'emailMerchSenior' => $data['emailMerchSenior'],
            'merchJunior' => $data['merchJunior'],
            'contactMerchJunior' => $data['contactMerchJunior'],
            'emailMerchJunior' => $data['emailMerchJunior'],
            'assistant' => $data['assistant'],
            'contactAssistant' => $data['contactAssistant'],
            'emailAssistant' => $data['emailAssistant'],
            'idUtilisateur' => $data['idUtilisateur'],
            'logo' => $data['logo'],
            'dateentree' => $data['dateentree'],
            'etat' => $data['etat'] ?? 0
        ]);
    }
}
