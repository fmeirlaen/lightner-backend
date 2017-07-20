<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 17/07/2017
 * Time: 15:17
 */

namespace TF\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TF\ApiBundle\Entity\tab_header_doc;

class DocType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('contact_name');
        $builder->add('contact_address');
        $builder->add('contact_codpost');
        $builder->add('contact_country');
        $builder->add('doc_date', DateTimeType::class, ['format' => 'dd-MM-yyyy', 'widget' => 'single_text']);
        $builder->add('doc_date_paid', DateTimeType::class, ['format' => 'dd-MM-yyyy', 'widget' => 'single_text']);
        $builder->add('doc_reference');
        $builder->add('doc_total');
        $builder->add('doc_paid');
        $builder->add('doc_total_vat');
        $builder->add('doc_number');
        $builder->add('doc_year');
        $builder->add('doc_type');
        $builder->add('contact_city');
        $builder->add('lines', CollectionType::class, array(
            'entry_type' => LineType::class,
            'allow_add' => 'true',
            'allow_delete' => 'true'
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
       $resolver->setDefaults([
           'data_class' => tab_header_doc::class,
           'csrf_protection' => false
       ]);
    }
}