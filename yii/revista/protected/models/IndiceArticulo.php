<?php

/**
 * This is the model class for table "indice_articulo".
 *
 * The followings are the available columns in table 'indice_articulo':
 * @property integer $id_indice_articulo
 * @property integer $id_indice
 * @property double $numero
 *
 * The followings are the available model relations:
 * @property Articulo[] $articulos
 * @property ContenidoExtra[] $contenidoExtras
 * @property Indice $idIndice
 */
class IndiceArticulo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'indice_articulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_indice, numero', 'required'),
			array('id_indice', 'numerical', 'integerOnly'=>true),
			array('numero', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_indice_articulo, id_indice, numero', 'safe', 'on'=>'search'),
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
			'articulos' => array(self::HAS_MANY, 'Articulo', 'id_indice_articulo'),
			'contenidoExtras' => array(self::HAS_MANY, 'ContenidoExtra', 'id_indice_articulo'),
			'idIndice' => array(self::BELONGS_TO, 'Indice', 'id_indice'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_indice_articulo' => 'Id Indice Articulo',
			'id_indice' => 'Id Indice',
			'numero' => 'Numero',
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

		$criteria->compare('id_indice_articulo',$this->id_indice_articulo);
		$criteria->compare('id_indice',$this->id_indice);
		$criteria->compare('numero',$this->numero);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IndiceArticulo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
