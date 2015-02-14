<?php

/**
 * This is the model class for table "articulo_autor".
 *
 * The followings are the available columns in table 'articulo_autor':
 * @property integer $id_articulo_autor
 * @property integer $id_articulo
 * @property integer $id_autor
 *
 * The followings are the available model relations:
 * @property Autor $idAutor
 * @property Articulo $idArticulo
 */
class ArticuloAutor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articulo_autor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_articulo, id_autor', 'required'),
			array('id_articulo, id_autor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_articulo_autor, id_articulo, id_autor', 'safe', 'on'=>'search'),
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
			'idAutor' => array(self::BELONGS_TO, 'Autor', 'id_autor'),
			'idArticulo' => array(self::BELONGS_TO, 'Articulo', 'id_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_articulo_autor' => 'Id Articulo Autor',
			'id_articulo' => 'Id Articulo',
			'id_autor' => 'Id Autor',
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

		$criteria->compare('id_articulo_autor',$this->id_articulo_autor);
		$criteria->compare('id_articulo',$this->id_articulo);
		$criteria->compare('id_autor',$this->id_autor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArticuloAutor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
