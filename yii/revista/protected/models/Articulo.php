<?php

/**
 * This is the model class for table "articulo".
 *
 * The followings are the available columns in table 'articulo':
 * @property integer $id_articulo
 * @property string $nombre
 * @property string $resumen
 * @property string $abstrac
 * @property string $introduccion
 * @property string $metodologia
 * @property string $contenido
 * @property string $fecha_creacion
 * @property string $archivo_pdf
 * @property integer $id_status
 * @property string $conclusiones
 * @property string $agradecimientos
 * @property string $referencias
 * @property integer $id_indice_articulo
 *
 * The followings are the available model relations:
 * @property IndiceArticulo $idIndiceArticulo
 * @property Status $idStatus
 * @property ArticuloAutor[] $articuloAutors
 */
class Articulo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, fecha_creacion, id_status', 'required'),
			array('id_status, id_indice_articulo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>500),
			array('archivo_pdf', 'length', 'max'=>100),
			array('resumen, abstrac, introduccion, metodologia, contenido, conclusiones, agradecimientos, referencias', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_articulo, nombre, resumen, abstrac, introduccion, metodologia, contenido, fecha_creacion, archivo_pdf, id_status, conclusiones, agradecimientos, referencias, id_indice_articulo', 'safe', 'on'=>'search'),
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
			'idIndiceArticulo' => array(self::BELONGS_TO, 'IndiceArticulo', 'id_indice_articulo'),
			'idStatus' => array(self::BELONGS_TO, 'Status', 'id_status'),
			'articuloAutors' => array(self::HAS_MANY, 'ArticuloAutor', 'id_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_articulo' => 'Id Articulo',
			'nombre' => 'Nombre',
			'resumen' => 'Resumen',
			'abstrac' => 'Abstrac',
			'introduccion' => 'Introduccion',
			'metodologia' => 'Metodologia',
			'contenido' => 'Contenido',
			'fecha_creacion' => 'Fecha Creacion',
			'archivo_pdf' => 'Archivo Pdf',
			'id_status' => 'Id Status',
			'conclusiones' => 'Conclusiones',
			'agradecimientos' => 'Agradecimientos',
			'referencias' => 'Referencias',
			'id_indice_articulo' => 'Id Indice Articulo',
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

		$criteria->compare('id_articulo',$this->id_articulo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('resumen',$this->resumen,true);
		$criteria->compare('abstrac',$this->abstrac,true);
		$criteria->compare('introduccion',$this->introduccion,true);
		$criteria->compare('metodologia',$this->metodologia,true);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('archivo_pdf',$this->archivo_pdf,true);
		$criteria->compare('id_status',$this->id_status);
		$criteria->compare('conclusiones',$this->conclusiones,true);
		$criteria->compare('agradecimientos',$this->agradecimientos,true);
		$criteria->compare('referencias',$this->referencias,true);
		$criteria->compare('id_indice_articulo',$this->id_indice_articulo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Articulo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
