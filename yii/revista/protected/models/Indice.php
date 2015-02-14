<?php

/**
 * This is the model class for table "indice".
 *
 * The followings are the available columns in table 'indice':
 * @property integer $id_indice
 * @property string $titulo
 * @property integer $numero
 * @property integer $id_revista
 *
 * The followings are the available model relations:
 * @property Revista $idRevista
 * @property IndiceArticulo[] $indiceArticulos
 */
class Indice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'indice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo', 'required'),
			array('numero, id_revista', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_indice, titulo, numero, id_revista', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idRevista' => array(self::BELONGS_TO, 'Revista', 'id_revista'),
			'indiceArticulos' => array(self::HAS_MANY, 'IndiceArticulo', 'id_indice'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_indice' => 'Id Indice',
			'titulo' => 'Titulo',
			'numero' => 'Numero',
			'id_revista' => 'Id Revista',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_indice',$this->id_indice);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('id_revista',$this->id_revista);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Indice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
