<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 17/07/2017
 * Time: 15:17
 */

namespace TF\ApiBundle\Form;

use Doctrine\DBAL\Types\BooleanType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TF\ApiBundle\Entity\tab_header_doc;

class DocType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('contact_name', TextType::class);
        $builder->add('contact_address', TextType::class);
        $builder->add('contact_codpost', TextType::class);
        $builder->add('contact_country', TextType::class);
        $builder->add('doc_date', DateTimeType::class, ['format' => 'dd-MM-yyyy', 'widget' => 'single_text']);
        $builder->add('doc_date_paid', DateTimeType::class, ['format' => 'dd-MM-yyyy', 'widget' => 'single_text']);
        $builder->add('doc_reference', TextType::class);
        $builder->add('doc_total', NumberType::class);
        $builder->add('doc_paid', BooleanType::class);
        $builder->add('doc_total_vat', NumberType::class);
        $builder->add('doc_number', NumberType::class);
        $builder->add('doc_year', NumberType::class);
        $builder->add('doc_type', TextType::class);
        $builder->add('contact_city', TextType::class);
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