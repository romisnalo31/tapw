<?php

/**
 * This is the model class for table "revista".
 *
 * The followings are the available columns in table 'revista':
 * @property integer $id_revista
 * @property string $nombre
 * @property string $portada
 * @property string $fecha
 * @property string $volumen
 * @property string $titulo
 * @property string $subtitulo
 * @property integer $numero
 * @property string $clave
 * @property string $directorio
 * @property string $editorial
 * @property integer $id_status
 *
 * The followings are the available model relations:
 * @property Indice[] $indices
 * @property Status $idStatus
 */
class Revista extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'revista';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, portada, fecha, volumen', 'required'),
			array('numero, id_status', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>500),
			array('portada', 'length', 'max'=>100),
			array('volumen, clave', 'length', 'max'=>45),
			array('titulo, subtitulo', 'length', 'max'=>200),
			array('directorio, editorial', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_revista, nombre, portada, fecha, volumen, titulo, subtitulo, numero, clave, directorio, editorial, id_status', 'safe', 'on'=>'search'),
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
			'indices' => array(self::HAS_MANY, 'Indice', 'id_revista'),
			'idStatus' => array(self::BELONGS_TO, 'Status', 'id_status'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_revista' => 'Id Revista',
			'nombre' => 'Nombre',
			'portada' => 'Portada',
			'fecha' => 'Fecha',
			'volumen' => 'Volumen',
			'titulo' => 'Titulo',
			'subtitulo' => 'Subtitulo',
			'numero' => 'Numero',
			'clave' => 'Clave',
			'directorio' => 'Directorio',
			'editorial' => 'Editorial',
			'id_status' => 'Id Status',
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

		$criteria->compare('id_revista',$this->id_revista);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('portada',$this->portada,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('volumen',$this->volumen,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('subtitulo',$this->subtitulo,true);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('directorio',$this->directorio,true);
		$criteria->compare('editorial',$this->editorial,true);
		$criteria->compare('id_status',$this->id_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Revista the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
