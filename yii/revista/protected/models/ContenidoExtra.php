<?php

/**
 * This is the model class for table "contenido_extra".
 *
 * The followings are the available columns in table 'contenido_extra':
 * @property integer $id_contenido_extra
 * @property string $nombre
 * @property string $archivo_pdf
 * @property integer $id_tipo_contenido
 * @property integer $id_indice_articulo
 * @property string $contenido
 *
 * The followings are the available model relations:
 * @property TipoContenido $idTipoContenido
 * @property IndiceArticulo $idIndiceArticulo
 */
class ContenidoExtra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contenido_extra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contenido', 'required'),
			array('id_tipo_contenido, id_indice_articulo', 'numerical', 'integerOnly'=>true),
			array('archivo_pdf', 'length', 'max'=>100),
			array('nombre', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_contenido_extra, nombre, archivo_pdf, id_tipo_contenido, id_indice_articulo, contenido', 'safe', 'on'=>'search'),
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
			'idTipoContenido' => array(self::BELONGS_TO, 'TipoContenido', 'id_tipo_contenido'),
			'idIndiceArticulo' => array(self::BELONGS_TO, 'IndiceArticulo', 'id_indice_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contenido_extra' => 'Id Contenido Extra',
			'nombre' => 'Nombre',
			'archivo_pdf' => 'Archivo Pdf',
			'id_tipo_contenido' => 'Id Tipo Contenido',
			'id_indice_articulo' => 'Id Indice Articulo',
			'contenido' => 'Contenido',
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

		$criteria->compare('id_contenido_extra',$this->id_contenido_extra);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('archivo_pdf',$this->archivo_pdf,true);
		$criteria->compare('id_tipo_contenido',$this->id_tipo_contenido);
		$criteria->compare('id_indice_articulo',$this->id_indice_articulo);
		$criteria->compare('contenido',$this->contenido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContenidoExtra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
